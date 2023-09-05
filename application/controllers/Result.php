<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Result extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("airline");
        $this->load->driver('cache');
        $this->load->library("Mobile_detect");
    }



    public function index()
    {
       
        $isMobile = new Mobile_Detect();
        $isMob = $isMobile->isMobile();
       

    
        $result = $this->setAmadeusResult($this->input->get());
        $ordinary_result = $result["simpleData"];
        
        // $alternate_date = $result["alternateDate"];
        $airlines = $this->db->get("tbl_airlines")->result();
        if ($this->session->userdata("result_session") == null) {
            $this->session->set_userdata("result_session", md5(rand(999, 9999) . time()));
        }


        $date = new DateTime(date("Y-m-d H:i"));
        $date2 = new DateTime($this->session->userdata("expireAt"));

        $diff = $date2->getTimestamp() - $date->getTimestamp();


        $this->cache->file->save($this->session->userdata("result_session"), $ordinary_result, $diff);
        /** saving cache file for passenger details form */
        chmod(APPPATH . "cache/" . $this->session->userdata("result_session"), 0777);

        $this->load->view("amadeus_result", ["result" => $ordinary_result, "airlines" => $airlines,  "isMobile" => $isMob]);
        // $this->load->view("result", ["result" => $ordinary_result, "airlines" => $airlines, "alternateDate" => $alternate_date, "isMobile" => $isMob]);
    }

    public function getSlider()
    {
        $tag = $this->input->post("tags");
        $fareData = $this->getFareResult("v4.3.0/shop/flights/tags/$tag?mode=live");

        print_r($fareData);
    }

    public function seat()
    {

        $tag = $this->input->post("tags");
        $fareData = $this->getFareResult("v4.3.0/shop/flights/tags/$tag?mode=live");
        $fareData = json_decode($fareData);
        $seatMap = json_decode($this->seatMap($fareData));
        $data['faredata'] = $fareData;
        $data['seatMap'] = $seatMap;
        echo json_encode($data);
    }

    public function getOneSeatMap()
    {
        $post = json_decode(json_encode($this->input->post()));

        $seatdata = $this->getOneseatMapByData($post);
        $data['seatMap'] = json_decode($seatdata);
        echo  json_encode($data);
    }

    public function seatHtml()
    {

        $this->load->view('seat');
    }
    public function getStates()
    {
        $country = $this->input->post("country");
        $state = $this->db->get_where("states", ["country_id" => $country])->result();
        echo json_encode($state);
    }

    public function Abandon()
    {
        if ($this->input->post("jaa")) {
            $values = array();
            parse_str($this->input->post("jaa"), $values);
            echo base64_decode($values["ita"]);
            $data = $this->db->get_where("tbl_abandon_booking", ["email" => $values["email"][0], "iata" => base64_decode($values["ita"]), "contact_no" => $values["contact_code"][0] . "" . $values["contact"][0]])->result();

            if (count($data) == 0) {
                $this->db->insert("tbl_abandon_booking", ["fullname" => $values["title"][0] . "" . $values["fname"][0] . "" . $values["lname"][0], "iata" => base64_decode($values["ita"]), "gender" => $values["gender"][0], "email" => $values["email"][0], "contact_no" => $values["contact_code"][0] . "" . $values["contact"][0], "dob" => $values["dob"][0], "datentime" => date("Y-m-d")]);
            }
        } else {
            echo show_404();
        }
    }
    public function form()
    {
        $tag = $this->uri->segment(3);
        
        if ($this->cache->file->get($this->session->userdata("result_session")) != false) {


            $data = $this->cache->file->get($this->session->userdata("result_session"));
            $country = $this->db->get("countries")->result();
            $state = $this->db->get_where("states", ["country_id" => "231"])->result();
            $dial_code = $this->db->get("dial_code")->result();
            $form = "";

            foreach (json_decode($data)->data as $key => $flight_offer) {
                if ($flight_offer->id == $this->uri->segment(3)) {
                    $form = $flight_offer;
                    break;
                }
            }

            $isMobile = new Mobile_Detect();
            $isMob = $isMobile->isMobile();


            $this->load->view("detail", ["form" => json_encode($form), "dial_code" => $dial_code, "isMobile" => $isMob, "state" => $state, "country" => $country]);
        } else {
            echo show_404();
        }
    }
}
