<?php

use SebastianBergmann\RecursionContext\Exception;

defined('BASEPATH') or exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    protected $_dsAppKey = "";
    protected $_lastToken = null;
    protected $_expireAt = null;
    protected $_lastInfo = null;
    protected $_debugMode = false;
    protected $_numretries = 0;

    public function __construct()
    {
        parent::__construct();
        $this->load->config('amadeus');
        $this->_dsAppKey = $this->getDsAppKey();
        $this->load->driver('cache');
    }

    public function __dd($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
        die;
    }

    /**
     *  flight-offers  (Result) 
     * GET
     * https://developers.amadeus.com/self-service/category/air/api-doc/flight-low-fare-search/api-reference
     * 
     */

    private function getAmadeusToken()
    {

        include "vendor/autoload.php";
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', $this->config->item("auth-url"), [
                'headers' => [
                    'Content-type' => 'application/x-www-form-urlencoded;charset=UTF-8'
                ],
                'form_params' => [
                    'grant_type' => 'client_credentials',
                    "client_id" => $this->config->item("client_id"),
                    "client_secret" => $this->config->item("client_secret")
                ]
            ]);
            
            $js = json_decode($response->getBody());

            if (isset($js->error)) {
                $this->__inInvalidResponse($js);
            }
            //echo 'token'. $js['access_token'];
            $now = time(); //date("Y-m-d h:i:sa");

            $expIn = $js->expires_in;
            $nDt = date("Y-m-d h:i:sa", $now);
            //var_dump($nDt);
            //calc expire time
            $expTime = date("Y-m-d h:i:sa", $now + $expIn);
            //date_add($expTime,"P".$expIn."s");
            //var_dump($expTime);
            $this->_lastToken = $js->access_token;
            $this->session->set_userdata("lastToken", $js->access_token);
            $this->session->set_userdata("expireAt", $expTime);
            $this->session->set_userdata("initAt", $nDt);
        } catch (GuzzleHttp\Exception\ServerException $e) {
            print_r(json_decode($e->getMessage()));
            die;
        }
    }




    public function getFareResult($url)
    {
        $retVal = 'null';

        if ($this->_lastToken == null || $this->checkExpDate() == null) {

            //try to get authentication token
            $this->getAuthToken();
        }

        if ($this->_lastToken != null) {
            include "vendor/autoload.php";
            try {
                $client = new GuzzleHttp\Client(['http_errors' => true]);;
                $res = $client->request(
                    'GET',
                    $this->config->item("apiUrl") . $url,
                    [
                        'headers' => [
                            'Content-type' => 'application/x-www-form-urlencoded;charset=UTF-8',
                            'Authorization' => 'Bearer ' . $this->_lastToken
                        ]
                    ]
                );



                return $responseBodyAsString = $res->getBody()->getContents();
            } catch (GuzzleHttp\Exception\ClientException $exception) {
                // echo  $this->config->item("apiUrl") . $url;
                $response = $exception->getResponse();


                return ($responseBodyAsString = $response->getBody()->getContents());
            } catch (\GuzzleHttp\Exception\ServerException $e) {
                echo "Request Timeout ! Please reload the page";
                die;
            }
        }
    }


    public function setAmadeusResult($data)    /*Result*/
    {

        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $originDestinations = null;

        if (!isset($data["depart-multi"]) || $data["depart-multi"][0] == null) {
            if (!isset($data["returnOn"]) || $data["returnOn"] == '') {
                $originDestinations[] = ["id" => "1", "originLocationCode" => $data["depart"], "destinationLocationCode" => $data["arrival"], "departureDateTimeRange" => ["date" => $data["departOn"][0], "time" => "00:00:00"]];
            } else {
                $originDestinations = [
                    ["id" => "1", "originLocationCode" => $data["depart"], "destinationLocationCode" => $data["arrival"], "departureDateTimeRange" => ["date" => $data["departOn"][0], "time" => "00:00:00"]],
                    ["id" => "2", "originLocationCode" => $data["arrival"], "destinationLocationCode" => $data["depart"], "departureDateTimeRange" => ["date" => $data["returnOn"], "time" => "00:00:00"]]
                ];
            }
        } else {

            foreach ($data['arrival-multi'] as $key => $arrival_multi) {
                if ($arrival_multi != null) {
                    $cou = $key + 1;
                    $originDestinations[] = ["id" => "$cou", "originLocationCode" => $data['depart-multi'][$key], "destinationLocationCode" => $arrival_multi, "departureDateTimeRange" => ["date" => $data["departOn"][$cou], "time" => "00:00:00"]];
                }
            }
        }
        $travelers = [];
        $count = 1;

        for ($i = 0; $i < intval($data["adult"]); $i++) {
            $travelers[] = ["id" => "$count", "travelerType" => "ADULT"];
            $count++;
        }
        for ($j = 0; $j < intval($data["child"]); $j++) {
            $travelers[] = ["id" => "$count", "travelerType" => "CHILD"];
            $count++;
        }
        for ($k = 0; $k < intval($data["infant"]); $k++) {
            $travelers[] = ["id" => "$count", "travelerType" => "INFANT"];
            $count++;
        }

        //  $originDestinations= 

        //$postArray = ["currencyCode" => "AUD", "originDestinations" => $originDestinations, "travelers" => $travelers, "sources" => ["GDS"], "searchCriteria" => ["maxFlightOffers" => 20, "flightFilters" => ["cabinRestrictions" => [["cabin" => $data['cabin'], "coverage" => "MOST_SEGMENTS", "originDestinationIds" => ["1"]]], "carrierRestrictions" => ["excludedCarrierCodes" => ["AZ"]]]]];
        $postArray = ["currencyCode" => "USD", "originDestinations" => $originDestinations, "travelers" => $travelers, "sources" => ["GDS"], "searchCriteria" => ["maxFlightOffers" => 50, "flightFilters" => ["cabinRestrictions" => [["cabin" => $data['cabin'], "coverage" => "MOST_SEGMENTS", "originDestinationIds" => ["1"]]]]]];
        //   echo json_encode($postArray);
        // die;
        // $departOn = $data["departOn"];
        // $returnOn = isset($data["returnOn"]) ? "&returnDate=" . $data["returnOn"] : "";
        // $depart = $data["depart"];
        // $arrival = $data["arrival"];
        // $adult = "&adults=" . $data["adult"];
        // $child = $data["child"] != '' ? $data["child"] : 0;
        // $infant = $data["infant"] != '' ? $data["infant"] : 0;
        // // $seniors = $data["seniors"] != '' ? $data["seniors"] : 0;
        // $total = intval($adult) + intval($child) + intval($infant);
        // $cabin =  $data["cabin"] != '' ? "&travelClass=" . $data['cabin'] : "";
        // $airline = $data['airline'] != '' ? "&includeAirlines=" . $data['airline'] : "";

        // $oneway = ($returnOn == '' ? '&oneWay=true' : '');

        // $retVal = 'null';

        if ($this->_lastToken == null || $this->checkExpDate() == null) {

            //try to get authentication token
            $this->getAmadeusToken();
        }


        if ($this->_lastToken != null) {
            try {
                $client = new GuzzleHttp\Client();



                $promises = [
                    // $client->getAsync($this->config->item("result-url") . "?originLocationCode=$depart&destinationLocationCode=$arrival&departureDate=$departOn{$returnOn}{$adult}&children=$child&infants=$infant{$cabin}{$airline}&max=50&currencyCode=AUD", ['headers' => [
                    //     'Content-type' => 'application/vnd.amadeus+json', 'Authorization' => 'Bearer ' . $this->_lastToken
                    // ]]),
                    $client->postAsync($this->config->item("result-url"), ['headers' => [
                        'Content-type' => 'application/vnd.amadeus+json', 'Authorization' => 'Bearer ' . $this->_lastToken
                    ], 'json' => $postArray])
                    // ,
                    // $client->getAsync($this->config->item("flight-dates") . "?origin=$depart&destination=$arrival", ['headers' => [
                    //     'Content-type' => 'application/vnd.amadeus+json', 'Authorization' => 'Bearer ' . $this->_lastToken
                    // ]]),
                ];


                // $results = GuzzleHttp\Promise\unwrap($promises);


                $response = GuzzleHttp\Promise\settle($promises)->wait();

                //  print_r($response[0]);
                $response1 = "";
                $response2 = "";

                if ($response[0]['state'] == 'fulfilled') {

                    $response1 = $response[0]['value']->getBody()->getContents();
                } else {
                    $response1 = json_encode(["error" => "No result Found"]);
                }

                // if ($response[1]['state'] == 'fulfilled') {
                //     $response2 = $response[1]['value']->getBody()->getContents();
                // } else {
                //     $response2 = json_encode(["error" => "No result Found"]);
                // }

                return [
                    "simpleData" => $response1
                    // "alternateDate" => $response2
                ];
            } catch (GuzzleHttp\Exception\ClientException $exception) {
                $response = $exception->getResponse();
                ($responseBodyAsString = $response->getBody()->getContents());
                $this->__dd($responseBodyAsString);
            } catch (\GuzzleHttp\Exception\ServerException $e) {
                echo "Request Timeout ! Please reload the page";
                die;
            }
        }
    }

    public function setResult($data) /* Bargain find maxer to load the live result */
    {



        //header('Content-Type: application/json');
        $arr = [];
        $AirTravelerAvail = [];

        if ($data["departOn"] && isset($data["returnOn"])) {
            $departOn = $data["departOn"] . "T00:00:00";
            $returnOn = $data["returnOn"] . "T00:00:00";
            $depart = $data["depart"];
            $arrival = $data["arrival"];
            $adult = $data["adult"];
            $child = $data["child"] != '' ? $data["child"] : 0;
            $infant = $data["infant"] != '' ? $data["infant"] : 0;
            $seniors = $data["seniors"] != '' ? $data["seniors"] : 0;
            $total = intval($adult) + intval($child) + intval($infant) + intval($seniors);
            $travellerArray = [];


            $adt = $data["adult"] != 0 ? ["Code" => "ADT", "Quantity" => (int) $data["adult"]] : "";
            $chd = $data["child"] != 0 ? ["Code" => "CNN", "Quantity" => (int) $data["child"]] : "";
            $sen = $data["seniors"] != 0 ? ["Code" => "SRC", "Quantity" => (int) $data["seniors"]] : "";
            $inf = $data["infant"] != 0 ? ["Code" => "INF", "Quantity" => (int) $data["infant"]] : "";


            $travellerArray = array_values(array_filter([
                $adt,
                $chd,
                $inf,
                $sen
            ]));


            $Airline = null;
            $AirTravelerAvail = [
                "AirTravelerAvail" => [
                    [
                        "PassengerTypeQuantity" => $travellerArray
                    ]
                ], "SeatsRequested" => [$total]
            ];


            $arr = [
                [
                    "DepartureDateTime" => $departOn,
                    "DestinationLocation" => ["LocationCode" => $arrival],
                    "OriginLocation" => ["LocationCode" => $depart],
                    "RPH" => "0",

                ], [
                    "DepartureDateTime" => $returnOn,
                    "DestinationLocation" => ["LocationCode" => $depart],
                    "OriginLocation" => ["LocationCode" => $arrival],
                    "RPH" => "1"
                ]
            ];
        } else {
            $adult = $data["adult"];
            $child = $data["child"];
            $departOn = $data["departOn"] . "T00:00:00";
            $depart = $data["depart"];
            $arrival = $data["arrival"];
            $adult = $data["adult"];
            $child = $data["child"] != '' ? $data["child"] : 0;
            $infant = $data["infant"] != '' ? $data["infant"] : 0;
            $seniors = $data["seniors"] != '' ? $data["seniors"] : 0;
            $total = intval($adult) + intval($child) + intval($infant) + intval($seniors);


            $adt = $data["adult"] != 0 ? ["Code" => "ADT", "Quantity" => (int) $data["adult"]] : "";
            $chd = $data["child"] != 0 ? ["Code" => "CNN", "Quantity" => (int) $data["child"]] : "";
            $sen = $data["seniors"] != 0 ? ["Code" => "SRC", "Quantity" => (int) $data["seniors"]] : "";
            $inf = $data["infant"] != 0 ? ["Code" => "INF", "Quantity" => (int) $data["infant"]] : "";


            $travellerArray = array_values(array_filter([
                $adt,
                $chd,
                $sen,
                $inf
            ]));

            $AirTravelerAvail = [
                "AirTravelerAvail" => [
                    [
                        "PassengerTypeQuantity" => $travellerArray,
                    ]
                ], "SeatsRequested" => [$total]
            ];


            $arr = [
                [
                    "DepartureDateTime" => $departOn,
                    "DestinationLocation" => ["LocationCode" => $arrival],
                    "OriginLocation" => ["LocationCode" => $depart],
                    "RPH" => "0",
                    // "TPA_Extensions" => $FTPA_Extensions  this is only for search flight by flight number wise
                ]
            ];
        }

        $AirlinePref = ($this->input->get("airline")) != "" ? ["Code" => $this->input->get("airline"), "PreferLevel" => "Preferred"] : ["Code" => "YY", "PreferLevel" => "Unacceptable"];


        $OTA_AirLowFareSearchRQ["OTA_AirLowFareSearchRQ"] = [
            "OriginDestinationInformation" => $arr,
            "POS" =>
            [
                "Source" => [
                    [
                        "PseudoCityCode" => "4YLJ",
                        "RequestorID" =>
                        [
                            "CompanyName" =>
                            ["Code" => "TN"],
                            "ID" => "REQ.ID",
                            "Type" => "0.AAA.X"
                        ],
                    ]
                ]
            ],
            "TPA_Extensions" =>
            [
                "IntelliSellTransaction" =>
                [
                    "RequestType" => ["Name" => "50ITINS"]
                ]
            ],
            "TravelPreferences" =>
            [
                "TPA_Extensions" =>
                [
                    "DataSources" =>
                    ["ATPCO" => "Enable", "LCC" => "Disable", "NDC" => "Disable"],
                    "NumTrips" => (object) [],
                ]
            ],
            "TravelerInfoSummary" => $AirTravelerAvail,
            "TravelPreferences" => [
                "VendorPref" => [$AirlinePref], "CabinPref" => [["Cabin" => $this->input->get("cabin"), "PreferLevel" => "Preferred"]]
            ],
            "Version" => "4.1.0",
            "ResponseType" => "OTA",
            "ResponseVersion" => "4.1.0",
            "SeparateMessages" => true,
            "TruncateMessages" => false,
            "Target" => "Production",
        ];

        $OTA_AirLowFareSearchRQ2["OTA_AirLowFareSearchRQ"] = [
            "OriginDestinationInformation" => $arr,
            "POS" =>
            [
                "Source" => [
                    [
                        "PseudoCityCode" => "4YLJ",
                        "RequestorID" =>
                        [
                            "CompanyName" =>
                            ["Code" => "TN"],
                            "ID" => "REQ.ID",
                            "Type" => "0.AAA.X"
                        ],
                    ]
                ]
            ],
            "TPA_Extensions" =>
            [
                "IntelliSellTransaction" =>
                [
                    "RequestType" => ["Name" => "AD3"]
                ]
            ],
            "TravelerInfoSummary" => $AirTravelerAvail,
            "TravelPreferences" => ["ValidInterlineTicket" => true],
            "Version" => "4.1.0",
            "ResponseType" => "OTA",
            "ResponseVersion" => "4.1.0",
            "SeparateMessages" => true,
            "TruncateMessages" => false,
            "Target" => "Production",
        ];


        if ($this->_lastToken == null || $this->checkExpDate() == null) {

            //try to get authentication token
            $this->getAuthToken();
        }


        if ($this->_lastToken != null) {
            include "vendor/autoload.php";
            try {

                $client = new GuzzleHttp\Client();
                $promises = [
                    $client->postAsync($this->config->item("apiUrl") . "v4.3.0/shop/flights?mode=live&enabletagging=true", ['headers' => [
                        'Content-type' => 'application/json', 'Authorization' => 'Bearer ' . $this->_lastToken
                    ], 'json' => $OTA_AirLowFareSearchRQ]),
                    $client->postAsync($this->config->item("apiUrl") . "v4.3.0/shop/altdates/flights?mode=live&enabletagging=true                    ", ['headers' => [
                        'Content-type' => 'application/json', 'Authorization' => 'Bearer ' . $this->_lastToken
                    ], 'json' => $OTA_AirLowFareSearchRQ2]),
                ];


                // $results = GuzzleHttp\Promise\unwrap($promises);


                $response = GuzzleHttp\Promise\settle($promises)->wait();

                //  print_r($response[0]);
                $response1 = "";
                $response2 = "";

                if (isset($response[0]['value'])) {

                    $response1 = $response[0]['value']->getBody()->getContents();
                } else {
                    $response1 = json_encode(["error" => "No result Found"]);
                }

                if (isset($response[1]['value'])) {
                    $response2 = $response[1]['value']->getBody()->getContents();
                } else {
                    $response2 = json_encode(["error" => "No result Found"]);
                }

                return [
                    "simpleData" => $response1,
                    "alternateDate" => $response2
                ];
                // response headers of first request
                // print_r($response[0]['value']->getHeaders());
                // // // retrieved contents of second request
                // print_r($response[1]['value']->getBody()->getContents());

                /** if you want to check simple query check singleFunctionPostDirectCall method below  */
            } catch (GuzzleHttp\Exception\ClientException $exception) {
                $response = $exception->getResponse();

                return $response->getBody()->getContents();
            } catch (\GuzzleHttp\Exception\ServerException $e) {
                echo "Request Timeout ! Request you to reload the page untill the result appears";
                die;
            } catch (GuzzleHttp\Exception\RequestException $exception) {
                print_r($response->getBody()->getContents());
            } catch (Exception $exception) {
                print_r($exception->getMessage());
            }
        }
    }

    public function getSeatMap($data)
    {


        $flight = ["destination" => $data->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->ArrivalAirport->LocationCode, "origin" => $data->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureAirport->LocationCode, "DepartureDate" => ["content" => $data->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->DepartureDateTime], "ArrivalDate" => ["content" => $data->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->ArrivalDateTime], "Operating" => ["carrier" => $data->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->OperatingAirline->Code, "content" => $data->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->OperatingAirline->FlightNumber], "Marketing" => [["carrier" => $data->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->MarketingAirline->Code, "content" => $data->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->FlightNumber]]];
        $EnhancedSeatMapRQ["EnhancedSeatMapRQ"] = [
            "SeatMapQueryEnhanced" =>
            ["RequestType" => "Payload", "Flight" => $flight, "CabinDefinition" => ["RBD" => $data->AirItinerary->OriginDestinationOptions->OriginDestinationOption[0]->FlightSegment[0]->ResBookDesigCode]],
        ];

        return $EnhancedSeatMapRQ;
    }

    public function seatMap($data)
    {


        $retVal = 'null';


        if ($this->_lastToken == null || $this->checkExpDate() == null) {
            $this->getAuthToken();
        }

        if ($this->_lastToken != null) {


            include "vendor/autoload.php";

            try {


                $client = new GuzzleHttp\Client(['http_errors' => true]);



                $res = $client->request(
                    'POST',
                    $this->config->item("apiUrl") . "v4.0.0/book/flights/seatmaps?mode=seatmaps",
                    [
                        'headers' => [
                            'Content-type' => 'application/json',
                            'Authorization' => 'Bearer ' . $this->_lastToken
                        ],
                        'json' => $this->getSeatMap($data)
                    ]
                );

                return ($res->getBody()->getContents());
            } catch (GuzzleHttp\Exception\ClientException $exception) {
                $response = $exception->getResponse();
                return $responseBodyAsString = $response->getBody()->getContents();
            } catch (\GuzzleHttp\Exception\ServerException $e) {
                $response = $e->getResponse();
                return $responseBodyAsString = $response->getBody()->getContents();
            }
        }
    }

    public function getOneseatMapByData($data)
    {


        $retVal = 'null';
        $flight = ["destination" => $data->tags->destination, "origin" => $data->tags->origin, "DepartureDate" => ["content" => $data->tags->datedeparture], "ArrivalDate" => ["content" => $data->tags->datearrival], "Operating" => ["carrier" => $data->tags->operating, "content" => $data->tags->mnumber], "Marketing" => [["carrier" => $data->tags->marketing, "content" => $data->tags->mnumber]]];
        $EnhancedSeatMapRQ["EnhancedSeatMapRQ"] = [
            "SeatMapQueryEnhanced" =>
            ["RequestType" => "Payload", "Flight" => $flight, "CabinDefinition" => ["RBD" => $data->tags->cabin]],
        ];

        if ($this->_lastToken == null || $this->checkExpDate() == null) {
            $this->getAuthToken();
        }

        if ($this->_lastToken != null) {


            include "vendor/autoload.php";

            try {


                $client = new GuzzleHttp\Client(['http_errors' => true]);



                $res = $client->request(
                    'POST',
                    $this->config->item("apiUrl") . "v4.0.0/book/flights/seatmaps?mode=seatmaps",
                    [
                        'headers' => [
                            'Content-type' => 'application/json',
                            'Authorization' => 'Bearer ' . $this->_lastToken
                        ],
                        'json' => $EnhancedSeatMapRQ
                    ]
                );

                return ($res->getBody()->getContents());
            } catch (GuzzleHttp\Exception\ClientException $exception) {
                $response = $exception->getResponse();
                return $responseBodyAsString = $response->getBody()->getContents();
            } catch (\GuzzleHttp\Exception\ServerException $e) {
                $response = $e->getResponse();
                return $responseBodyAsString = $response->getBody()->getContents();
            }
        }
    }

    public function getFare($post)
    {
        $retVal = 'null';


        if ($this->_lastToken == null || $this->checkExpDate() == null) {

            //try to get authentication token
            $this->getAuthToken();
        }

        if ($this->_lastToken != null) {

            //json request
            // echo "<pre>";
            // print_r($this->config->item("apiUrl") . "/v2.2.0/passenger/records?mode=create");
            // print_r($this->getPassengerJSON($post));
            // print_r([
            //     'Content-type' => 'application/json',
            //     'Authorization' => 'Bearer ' . $this->_lastToken
            // ]);
            include "vendor/autoload.php";
            try {
                $client = new GuzzleHttp\Client(['http_errors' => true]);;
                $res = $client->request(
                    'POST',
                    $this->config->item("apiUrl") . "v2.2.0/passenger/records?mode=create",
                    [
                        'headers' => [
                            'Content-type' => 'application/json',
                            'Authorization' => 'Bearer ' . $this->_lastToken
                        ],
                        'json' => $this->getPassengerJSON($post)
                    ]
                );

                $returnPNRDATA = json_decode($res->getBody()->getContents());
                $returnPNRDATAJson = $res->getBody()->getContents();

                if ($returnPNRDATA->CreatePassengerNameRecordRS->ApplicationResults->status == "Complete") {
                    $this->db->insert("tbl_booking", ["pnr" => $returnPNRDATA->CreatePassengerNameRecordRS->ItineraryRef->ID, "request" => json_encode($post), "booking_data" => json_encode($returnPNRDATA), "datentime" => date("Y-m-d H:i:s")]);

                    return $returnPNRDATA->CreatePassengerNameRecordRS->ItineraryRef->ID;
                } else {
                    echo "<h1>REQUEST FAILED TRY TO CONTACT  123-456-7890   </h1>";

                    // print_r($returnPNRDATA);
                }
            } catch (GuzzleHttp\Exception\ClientException $exception) {
                echo "<h1>REQUEST FAILED TRY TO CONTACT  123-456-7890   </h1>";

                $response = $exception->getResponse();
                return $responseBodyAsString = $response->getBody()->getContents();
            } catch (\GuzzleHttp\Exception\ServerException $e) {
                echo "Request Timeout ! Request you to reload the page untill the result appears";
                die;
            }
        }
    }

    public function setPaymentAmadeus($post)
    {

        // header("Content-type:application/json");
        if ($this->cache->file->get($this->session->userdata("result_session")) != false) {

            if ($this->_lastToken == null || $this->checkExpDate() == null) {

                //try to get authentication token
                $this->getAmadeusToken();
            }

            if ($this->_lastToken != null) {
                $data = $this->cache->file->get($this->session->userdata("result_session"));

                $form = "";

                foreach (json_decode($data)->data as $key => $flight_offer) {
                    if ($flight_offer->id == $this->uri->segment(2)) {
                        $form = $flight_offer;
                        break;
                    }
                }




                //echo "<pre>";

                $json_cache = json_decode($this->cache->file->get($this->session->userdata('result_session')));
                //  print_r(json_decode($this->cache->file->get($this->session->userdata('result_session'))));

                //  print_r($form);
                $itineraries_arr = [];
                foreach ($form->itineraries as $key => $itineraries) {
                    $segments_arr1 = [];
                    foreach ($itineraries->segments as $key2 => $segments) {
                        $segments_arr = [
                            "departure" => $segments->departure,
                            "arrival" => $segments->arrival,
                            "carrierCode" => $segments->carrierCode,
                            "number" => $segments->number,
                            "aircraft" => $segments->aircraft,
                            "operating" => $segments->operating,
                            "duration" => $segments->duration,
                            "id" => $segments->id,
                            "numberOfStops" => $segments->numberOfStops
                        ];

                        $segments_arr1['segments'][] = $segments_arr;
                    }


                    $itineraries_arr[] = $segments_arr1;
                }


                $data1['data']["type"] = $form->type;
                $data1['data']["flightOffers"][] = [
                    'type' => $form->type,
                    'id' => $form->id,
                    'source' => $form->source,
                    "instantTicketingRequired" => $form->instantTicketingRequired,
                    "nonHomogeneous" => $form->nonHomogeneous,
                    "paymentCardRequired" => true,
                    "lastTicketingDate" => $form->lastTicketingDate,
                    "itineraries" => $itineraries_arr,
                    "price" => $form->price,
                    "pricingOptions" => $form->pricingOptions,
                    "validatingAirlineCodes" => $form->validatingAirlineCodes,
                    "travelerPricings" => $form->travelerPricings,

                ];




                foreach ($this->input->post("number") as $key => $number) {
                    $travellers[] = ['id' => $key + 1, "dateOfBirth" => $this->input->post("dob")[$key], "name" => ["firstName" => $this->input->post("fname")[$key], "lastName" => $this->input->post("lname")[$key]], "gender" => ($this->input->post("gender")[$key] == "M" ? "MALE" : "FEMALE"), "contact" => ["emailAddress" => $this->input->post("email")[0], "phones" => [["deviceType" => "MOBILE", "code" => $this->input->post("contact_code")[0], "number" => $this->input->post("contact")[0]]]]];
                }
                $data1['data']['formOfPayments'][] = ['creditCard' => ['holder' => $this->input->post("cardholderfname") . " " . $this->input->post("cardholderlname"), 'number' => $this->input->post("card_number"), 'expiryDate' => $this->input->post("exp_year") . "-" . $this->input->post("exp_month"), 'securityCode' => $this->input->post("cvv2")]];
                $data1['data']["travelers"] = $travellers;
                $data1['data']["remarks"] = ["general" => [["subType" => "GENERAL_MISCELLANEOUS", "text" => "ONLINE BOOKING FROM HORN TRAVELS"]]];
                $data1['data']["ticketingAgreement"] = ["option" => "DELAY_TO_CANCEL", "delay" => "6D"];
                $data1['data']["contacts"] = [
                    [
                        'addresseeName' =>
                        [
                            "firstName" => "Hassannoor",
                            "lastName" => "Osman"
                        ],
                        "companyName" => "HORN TRAVELS",
                        "purpose" => "STANDARD",
                        "phones" => [
                            [
                                "deviceType" => "LANDLINE",
                                "countryCallingCode" => "+1",
                                "number" => "+1 888-811-2217 "
                            ]
                        ],
                        "emailAddress" => "info@Cheapskytravel.com",
                        "address" => [
                            "lines" => ['117 Windwoods Drive, Collegeville PA 19426'],
                            "postalCode" => "VIC3011",
                            "cityName" => "Collegeville",
                            "countryCode" => "USA"
                        ]
                    ]
                ];




                if ($this->config->item("onlineBooking") == true) {
                    include "vendor/autoload.php";
                    try {
                        $client = new GuzzleHttp\Client(['http_errors' => true]);;
                        $res = $client->request(
                            'POST',
                            $this->config->item("booking-ticket"),
                            [
                                'headers' => [
                                    'Content-type' => 'application/vnd.amadeus+json',
                                    'Authorization' => 'Bearer ' . $this->_lastToken
                                ],
                                'json' => $data1
                            ]
                        );

                        $returnPNRDATA = json_decode($res->getBody()->getContents());

                        $returnPNRDATAJson = $res->getBody()->getContents();


                        if ($returnPNRDATA->CreatePassengerNameRecordRS->ApplicationResults->status == "Complete") {
                            $this->db->insert("tbl_booking", ["pnr" => $returnPNRDATA->CreatePassengerNameRecordRS->ItineraryRef->ID, "request" => json_encode($post), "email" => $post["email"][0], "booking_data" => json_encode($returnPNRDATA), "datentime" => date("Y-m-d H:i:s")]);

                            return $returnPNRDATA->CreatePassengerNameRecordRS->ItineraryRef->ID;
                        } else {
                            // print_r(json_encode($returnPNRDATA));
                            echo "<h1>PNR has not been created successfully try to call 123-456-7890  </h1>";

                            //print_r($returnPNRDATA);
                        }
                    } catch (GuzzleHttp\Exception\ClientException $exception) {
                        $response = $exception->getResponse();

                        print_r(json_decode($responseBodyAsString = $response->getBody()->getContents()));
                        echo "<h1>PNR has not been created successfully try to call 123-456-7890  </h1>";
                        // echo "<pre>";
                        // print_r(json_decode($responseBodyAsString = $response->getBody()->getContents())->message);
                        die;
                    } catch (\GuzzleHttp\Exception\ServerException $e) {
                        print_r($e->getMessage());
                        echo "Request Timeout ! Request you to reload the page untill the result appears";
                        die;
                    }
                } else {

                    $form = json_decode(json_encode($data1))->data->flightOffers[0]->price->total;
                    $markup_value = $this->session->userdata("markupdata") ? json_decode(json_encode(json_decode($this->session->userdata("markupdata"))), TRUE) : "0";
                    $price = isset($markup_value["price"]) ? floatval($markup_value["price"]) : "0";
                    $p = $form + $price;
                    $device_type = $this->getAgentType();
                    $pnr = "TC" . mt_rand(999, 99999);
                    $this->db->insert("tbl_booking", ["pnr" => $pnr, "request" => json_encode($post), 'device_type' => $device_type, 'trip_type' => $post["tripType"], 'ip_address' => $this->input->ip_address(), "email" => $post["email"][0], "offline_booking_data" => json_encode($data1), "datentime" => date("Y-m-d H:i:s")]);
                    return $pnr;
                }
            } else {
                echo show_404();
            }
        }
    }

    private function getAgentType()
    {
        $this->load->library('user_agent');
        if ($this->agent->is_browser()) {
            $agent = $this->agent->browser() . ' ' . $this->agent->version();
        } elseif ($this->agent->is_robot()) {
            $agent = $this->agent->robot();
        } elseif ($this->agent->is_mobile()) {
            $agent = $this->agent->mobile();
        } else {
            $agent = 'Unidentified User Agent';
        }
        return $agent;
    }
    public function getpayment($post)
    {
        $retVal = 'null';


        if ($this->_lastToken == null || $this->checkExpDate() == null) {

            //try to get authentication token
            $this->getAuthToken();
        }

        if ($this->_lastToken != null) {

            // json request
            // echo "<pre>";
            // print_r(json_encode($this->getPassengerJSON($post), JSON_PRETTY_PRINT));
            // echo  $this->config->item("apiUrl") . "/v2.2.0/passenger/records?mode=create";
            // print_r(json_encode([
            //     'Content-type' => 'application/json',
            //     'Authorization' => 'Bearer ' . $this->_lastToken
            // ]));


            include "vendor/autoload.php";
            try {
                $client = new GuzzleHttp\Client(['http_errors' => true]);;
                $res = $client->request(
                    'POST',
                    $this->config->item("apiUrl") . "v2.2.0/passenger/records?mode=create",
                    [
                        'headers' => [
                            'Content-type' => 'application/json',
                            'Authorization' => 'Bearer ' . $this->_lastToken
                        ],
                        'json' => $this->getPassengerJSON($post)
                    ]
                );

                $returnPNRDATA = json_decode($res->getBody()->getContents());

                $returnPNRDATAJson = $res->getBody()->getContents();

                if ($returnPNRDATA->CreatePassengerNameRecordRS->ApplicationResults->status == "Complete") {
                    $this->db->insert("tbl_booking", ["pnr" => $returnPNRDATA->CreatePassengerNameRecordRS->ItineraryRef->ID, "request" => json_encode($post), "email" => $post["email"][0], "booking_data" => json_encode($returnPNRDATA), "datentime" => date("Y-m-d H:i:s")]);

                    return $returnPNRDATA->CreatePassengerNameRecordRS->ItineraryRef->ID;
                } else {
                    // print_r(json_encode($returnPNRDATA));
                    echo "<h1>PNR has not been created successfully try to call 123-456-7890  </h1>";

                    //print_r($returnPNRDATA);
                }
            } catch (GuzzleHttp\Exception\ClientException $exception) {
                $response = $exception->getResponse();
                echo "<pre>";
                print_r(json_decode($responseBodyAsString = $response->getBody()->getContents())->message);
                echo "<h1>PNR has not been created successfully try to call 123-456-7890  </h1>";
                // echo "<pre>";
                // print_r(json_decode($responseBodyAsString = $response->getBody()->getContents())->message);
                die;
            } catch (\GuzzleHttp\Exception\ServerException $e) {
                echo "Request Timeout ! Request you to reload the page untill the result appears";
                die;
            }
        }
    }

    public function getAuthToken()
    {
        include "vendor/autoload.php";
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('POST', $this->config->item("authenticationUrl") . 'v2/auth/token', [
                'headers' => [
                    'Content-type' => 'application/x-www-form-urlencoded;charset=UTF-8',
                    'Authorization' => 'Basic ' . $this->_dsAppKey
                ],
                'form_params' => [
                    'grant_type' => 'client_credentials'
                ]
            ]);


            $js = json_decode($response->getBody());

            if (isset($js->error)) {
                $this->__inInvalidResponse($js);
            }
            //echo 'token'. $js['access_token'];
            $now = time(); //date("Y-m-d h:i:sa");

            $expIn = $js->expires_in;
            $nDt = date("Y-m-d h:i:sa", $now);
            //var_dump($nDt);
            //calc expire time
            $expTime = date("Y-m-d h:i:sa", $now + $expIn);
            //date_add($expTime,"P".$expIn."s");
            //var_dump($expTime);
            $this->_lastToken = $js->access_token;
            $this->session->set_userdata("lastToken", $js->access_token);
            $this->session->set_userdata("expireAt", $expTime);
            $this->session->set_userdata("initAt", $nDt);
        } catch (GuzzleHttp\Exception\ServerException $e) {
            print_r(json_decode($e->getMessage()));
            die;
        }
    }

    private function __inInvalidResponse($data)
    {
        $this->__dd($data);
    }

    private function checkExpDate()
    {
        $retVal = false;
        $dtToken = strtotime($this->session->userdata("expireAt"));
        $dtNow = time();
        $subTime = $dtToken - $dtNow;

        if ($this->_debugMode) {
            var_dump($subTime);
            var_dump($this->session->userdata());
        }
        if ($subTime > 0) {
            $retVal = true;
        } else {
            $retVal = false;
        }


        return $retVal;
    }

    public function getPassengerJSON($post)
    {
        $data = json_decode($this->getFareResult("v4.3.0/shop/flights/tags/{$this->uri->segment(2)}?mode=live"));


        $flightsegmentas = [];
        $airline_Code = "";

        // print_r($data);
        // die;
        $numberInParty = count($post["ptype"]);
        if (in_array("INF", $post["ptype"])) {
            $ar = array_flip($post["ptype"]);
            count($ar["INF"]);
            $numberInParty = count($post["ptype"]) - count($ar["INF"]);
        }

        foreach ($data->AirItinerary->OriginDestinationOptions->OriginDestinationOption as $flightsegmentDe) {
            foreach ($flightsegmentDe->FlightSegment as $key => $flightsegment) {
                $bookingCode = $data->AirItineraryPricingInfo[0]->PTC_FareBreakdowns->PTC_FareBreakdown[0]->FareBasisCodes->FareBasisCode[$key]->BookingCode;
                $qty = $data->AirItineraryPricingInfo[0]->PTC_FareBreakdowns->PTC_FareBreakdown[0]->PassengerTypeQuantity->Quantity;
                $flightsegmentas[] = array(
                    "ArrivalDateTime" => $flightsegment->ArrivalDateTime,
                    "DepartureDateTime" => $flightsegment->DepartureDateTime,
                    "OriginLocation" => ["LocationCode" => "{$flightsegment->DepartureAirport->LocationCode}"],
                    "DestinationLocation" => ["LocationCode" => "{$flightsegment->ArrivalAirport->LocationCode}"],
                    "FlightNumber" => "{$flightsegment->OperatingAirline->FlightNumber}",
                    "NumberInParty" => (string) $numberInParty,
                    "ResBookDesigCode" => "{$bookingCode}",
                    "Status" => "NN",
                    "MarketingAirline" => ["Code" => "{$flightsegment->OperatingAirline->Code}", "FlightNumber" => "{$flightsegment->OperatingAirline->FlightNumber}"],
                );
                $airline_Code = $flightsegment->OperatingAirline->Code;
            }
        }

        $origindes = [
            "FlightSegment" => $flightsegmentas
        ];


        $QTY_F = $data->AirItineraryPricingInfo[0]->PTC_FareBreakdowns->PTC_FareBreakdown[0]->PassengerTypeQuantity->Quantity;

        $PricingQualifiers = [];
        $PricingQualifiers2 = [];
        $ADT = 0;
        $CNN = 0;
        $INF = 0;
        $SRC = 0;


        foreach ($post["ptype"] as $ptype) {
            if ($ptype == "ADT") {
                $ADT++;
            }
            if ($ptype == "CNN") {
                $CNN++;
            }
            if ($ptype == "INF") {
                $INF++;
            }
            if ($ptype == "SRC") {
                $SRC++;
            }
        }
        $adtV = $ADT > 0 ? ["Code" => "ADT", "Quantity" => "$ADT"] : "";
        $chdV = $CNN > 0 ? ["Code" => "CNN", "Quantity" => "$CNN"] : "";
        $infV = $INF > 0 ? ["Code" => "INF", "Quantity" => "$INF"] : "";
        $srcV = $SRC > 0 ? ["Code" => "SRC", "Quantity" => "$SRC"] : "";

        $PricingQualifiers2 = array_values(array_filter([$adtV, $chdV, $infV, $srcV]));

        $PricingQualifiers["PassengerType"] = $PricingQualifiers2;
        $AirPrice = [
            [
                "PriceRequestInformation" =>
                [
                    "Retain" => true,
                    "OptionalQualifiers" =>
                    [
                        "FOP_Qualifiers" =>
                        [
                            "BasicFOP" => ["Type" => "CK"]
                        ],
                        "PricingQualifiers" => $PricingQualifiers
                    ]
                ]
            ]
        ];

        $AirBook = ["HaltOnStatus" => [["Code" => "HL"], ["Code" => "KK"], ["Code" => "LL"], ["Code" => "NN"], ["Code" => "NO"], ["Code" => "UC"], ["Code" => "US"]], "OriginDestinationInformation" => $origindes, "RedisplayReservation" => ["NumAttempts" => 10, "WaitInterval" => 300]];
        $PostProcessing = ["ARUNK" => (object) [], "EndTransaction" => ["Source" => ["ReceivedFrom" => "Australia"]], "RedisplayReservation" => ["waitInterval" => 100]];
        $secureFlight = [];
        $contactNumber = [];
        foreach ($this->input->post("number") as $key => $number) {
            $isInfant = $this->input->post("ptype")[$key] == "INF" ? "true" : "false";

            $secureFlight[] = [
                "SegmentNumber" => "A",
                "PersonName" => [
                    "Gender" => $this->input->post("gender")[$key], "NameNumber" => $number, "GivenName" => $this->input->post("fname")[$key], "Surname" => $this->input->post("lname")[$key]
                ], "VendorPrefs" =>
                [
                    "Airline" => ["Hosted" => true]
                ]
            ];
            if (isset($this->input->post("contact")[$key])) {
                $contactNumber[] = ["NameNumber" => $number, "Phone" => $this->input->post("contact")[$key], "PhoneUseType" => "H"];
            }

            if ($post["ptype"][$key] == "INF") {
                $personname[] = ["NameNumber" => $number, "Infant" => true, "NameReference" => "ABC12$key", "PassengerType" => $this->input->post("ptype")[$key], "GivenName" => $this->input->post("fname")[$key], "Surname" => $this->input->post("lname")[$key]];
            } else {
                $personname[] = ["NameNumber" => $number, "NameReference" => "ABC12$key", "PassengerType" => $this->input->post("ptype")[$key], "GivenName" => $this->input->post("fname")[$key], "Surname" => $this->input->post("lname")[$key]];
            }
        }
        $SpecialReqDetails = [
            "AddRemark" => ["RemarkInfo" => ["FOP_Remark" => [
                "CC_Info" => [
                    "PaymentCard" => [
                        "AirlineCode" => $airline_Code,
                        "CardSecurityCode" => $this->input->post("cvv2"),
                        "Code" => "VI",
                        "ExpireDate" => $this->input->post("exp_year") . "-" . $this->input->post("exp_month"),
                        "Number" => $this->input->post("card_number"),
                    ]
                ], "Type" => "General"
            ]]],
            "SpecialService" =>
            ["SpecialServiceInfo" =>
            [
                "SecureFlight" => $secureFlight,
                "Service" =>
                [["SSR_Code" => "OTHS", "Text" => "CC MARCIN DZIK"]]
            ]]
        ];
        $email = [["Address" => $this->input->post("email")[0]]];
        $customer["CreditCardData"] = ["BillingInformation" => ["Zip" => $this->input->post("zip"), "cardHolderName" => $this->input->post("cardholderfname") . " " . $this->input->post("cardholderlname"), "streetAddress" => $this->input->post("city") . " " . $this->input->post("state") . " " . $this->input->post("zip"), "city" => $this->input->post("city")]];
        $customer["ContactNumbers"] = ["ContactNumber" => $contactNumber];
        $customer["PersonName"] = $personname;
        $customer["Email"] = $email;
        $agency["AgencyInfo"] = ["Address" => ["AddressLine" => "Australia", "CityName" => "SOUTHLAKE", "CountryCode" => "US", "PostalCode" => "76092", "StateCountyProv" => ["StateCode" => "TX"], "StreetNmbr" => "3150 SABRE DRIVE"], "Ticketing" => ["TicketType" => "7TAW"]];
        $agency["CustomerInfo"] = $customer;

        $arr["CreatePassengerNameRecordRQ"] = ["version" => "2.2.0", "haltOnAirPriceError" => false, "TravelItineraryAddInfo" => $agency, "AirBook" => $AirBook, "AirPrice" => $AirPrice, "SpecialReqDetails" => $SpecialReqDetails, "PostProcessing" => $PostProcessing];


        return $arr;
        // echo "<pre>";
        //
        // die;
    }

    private function getDsAppKey()
    {
        //Go to https://developer.sabre.com/docs/read/rest_basics/authentication
        //to Read more on building your APP Key.
        //TO Generate your App Key below,
        //1 - Base64 your Client Id
        //2 - Base64 Client Secret
        //3 - Concat both Base64 values with a :
        //4 - Base64 the concatenation.


        $base = base64_encode($this->config->item("api_user"));
        $secret = base64_encode($this->config->item("api_secret"));
        $key = base64_encode($base . ":" . $secret);

        return $key;
        //$this->__dd($key);
    }


    public function getHotelImage($hotelKey)
    {


        if ($this->_lastToken == null || $this->checkExpDate() == null) {

            //try to get authentication token
            $this->getAuthToken();
        }

        if ($this->_lastToken != null) {
            include "vendor/autoload.php";
            try {
                $client = new GuzzleHttp\Client(['http_errors' => true]);

                $res = $client->request(
                    'POST',
                    $this->config->item("apiUrl") . "v1.0.0/shop/hotels/image?mode=image",
                    [
                        'headers' => [
                            'Content-type' => 'application/json',
                            'Authorization' => 'Bearer ' . $this->_lastToken
                        ],
                        'json' => ["GetHotelImageRQ" => ["ImageRef" => ["CategoryCode" => 1, "LanguageCode" => 'EN', 'Type' => 'ORIGINAL'], "HotelRefs" => ["HotelRef" => [["HotelCode" => $hotelKey, "CodeContext" => 'Sabre']]]]]
                    ]
                );

                $returnImages = ($res->getBody()->getContents());
                return $returnImages;
            } catch (GuzzleHttp\Exception\ClientException $exception) {
                $response = $exception->getResponse();
                echo $response->getBody()->getContents()->message;
            } catch (\GuzzleHttp\Exception\ServerException $e) {
                echo json_encode(["response" => "Request Timeout ! Request you to reload the page until the result appears"]);
            }
        }
    }

    public function getRooms($rateKey)
    {


        if ($this->_lastToken == null || $this->checkExpDate() == null) {

            //try to get authentication token
            $this->getAuthToken();
        }

        if ($this->_lastToken != null) {
            include "vendor/autoload.php";
            try {
                $client = new GuzzleHttp\Client(['http_errors' => true]);

                $res = $client->request(
                    'POST',
                    $this->config->item("apiUrl") . "v3.0.0/hotel/pricecheck",
                    [
                        'headers' => [
                            'Content-type' => 'application/json',
                            'Authorization' => 'Bearer ' . $this->_lastToken
                        ],
                        'json' => ["HotelPriceCheckRQ" => ["version" => "3.0.0", "RateInfoRef" => ["RateKey" => $rateKey]]]
                    ]
                );

                $returnRooms = ($res->getBody()->getContents());
                return $returnRooms;
            } catch (GuzzleHttp\Exception\ClientException $exception) {
                $response = $exception->getResponse();
                echo $response->getBody()->getContents()->message;
            } catch (\GuzzleHttp\Exception\ServerException $e) {
                echo json_encode(["response" => "Request Timeout ! Request you to reload the page until the result appears"]);
            }
        }
    }


    private function buildHotelAvailRq($data)
    {


        foreach ($data["adult"] as $key => $adult) {
            $r[] = array_filter(["Adults" => (int) $adult, "Children" => (int) $data["child"][$key], "ChildAges" => $data["child"][$key] != '' ? implode(",", $data["age"]) : "", "Index" => $key + 1]);
        }
        $rooms = [
            "Room" => $r
        ];
        $request = ["GetHotelAvailRQ" => ["SearchCriteria" => [
            "OffSet" => 1, "SortBy" => "TotalRate", "SortOrder" => "ASC", "PageSize" => 40,
            "GeoSearch" => ["GeoRef" => ["Radius" => 200, "UOM" => "KM", "RefPoint" => ["Value" => $data["to"], "ValueContext" => "CODE", "RefPointType" => "6", "StateProv" => "TX", "CountryCode" => "US"]]],
            "RateInfoRef" => ["CurrencyCode" => "USD", "BestOnly" => "2", "PrepaidQualifier" => "IncludePrepaid", "RefundableOnly" => false, "Rooms" => $rooms, "ConvertedRateInfoOnly" => true, "StayDateRange" => ["StartDate" => $data["departOn"], "EndDate" => $data["returnOn"]]],
            "HotelPref" => ["ChainCodes" => ["ChainCode" => ["HY", "MC"]]], "ImageRef" => ["Type" => "LARGE", "LanguageCode" => "en"]
        ]]];


        return ($request);
    }


    public function getHotelResult($data)
    {

        if ($this->_lastToken == null || $this->checkExpDate() == null) {

            //try to get authentication token
            $this->getAuthToken();
        }

        if ($this->_lastToken != null) {
            include "vendor/autoload.php";
            try {


                $jsonRequest = ($this->buildHotelAvailRq($data));
                $client = new GuzzleHttp\Client(['http_errors' => true]);

                $res = $client->request(
                    'POST',
                    $this->config->item("apiUrl") . "v2.0.0/get/hotelavail",
                    [
                        'headers' => [
                            'Content-type' => 'application/json',
                            'Authorization' => 'Bearer ' . $this->_lastToken
                        ],
                        'json' => $jsonRequest
                    ]
                );


                // $results = GuzzleHttp\Promise\unwrap($promises);


                $returnDetails = ($res->getBody()->getContents());
                return $returnDetails;


                /** if you want to check simple query check singleFunctionPostDirectCall method below  */
            } catch (GuzzleHttp\Exception\ClientException $exception) {
                $res = $exception->getResponse();
                return $res->getBody()->getContents();
            } catch (\GuzzleHttp\Exception\ServerException $e) {
                echo "Request Timeout ! Request you to reload the page until the result appears";
                die;
            } catch (GuzzleHttp\Exception\RequestException $exception) {
                print_r($res->getBody()->getContents());
            } catch (Exception $exception) {
                print_r($exception->getMessage());
            }
        }
    }
}
