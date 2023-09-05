<?php

defined('BASEPATH') or exit('No direct script access allowed');

class SeatMap extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("airline");
    }

    public function index()
    {

        echo $json = '{
  "EnhancedSeatMapRQ": {
    "SeatMapQueryEnhanced": {
      "RequestType": "Payload",
      "AirlineRecordLocator": "GXGLJX",
      "Flight": {
        "destination": "LGA",
        "origin": "ORD",
        "DepartureDate": {
          "content": "2019-12-12"
        },
        "Operating": {
          "carrier": "AA",
          "content": "358"
        },
        "Marketing": [{
            "carrier": "AA",
            "content": "358"
          }
        ]
      },
      "CabinDefinition": {
        "RBD": "Y"
      }
    }
  }
}';

    }



}
