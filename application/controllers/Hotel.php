<?php

class Hotel extends MY_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper("airline");
        $this->load->library('encryption');
        $this->encryption->initialize(array('driver' => 'openssl'));
        $this->load->library("Mobile_detect");
    }

    public function searchResult()
    {
        if ($this->input->get() != null) {
            $data = $this->getHotelResult($this->security->xss_clean($this->input->get()));


            $this->load->view("includes/header");

            $this->load->view("hotel-result", compact("data"));
            $this->load->view("includes/footer");
        } else {
            echo show_404();
        }
    }
    public function sendQuery()
    {


        if ($this->input->post("to") != null && $this->input->post("departOn") != null) {
            $post = $this->security->xss_clean($this->input->post());
            $rand =  "HT" . mt_rand(999, 99999);
            $this->db->insert("hotel_query", ["destination" => $post["destination"], "datentime" => date("Y-m-d"),  "confirmation" => $rand, "checkin" => $post["departOn"], "checkout" => $post["returnOn"], "no_rooms" => $post["room"], "room_star" => $post["room_star"], "leadname" => $post["leadPassenger"], "leademail" => $post["leadEmail"], "leadcontact" => $post["leadContact"], "room_info" => json_encode($post)]);

            return redirect("Hotel/hotelConfirmation?reference=$rand");
        } else {
            echo show_404();
        }
    }

    public function hotelConfirmation()
    {
        $reference =  $this->input->get("reference");
        $data =  $this->db->get_where("hotel_query", ["confirmation" => $reference])->result();
        if (count($data) > 0) {
            $data = $data[0];
            $this->load->view("hotelTicketOffline", compact("data"));
            if ($data->mail == 0) {
                $subject = WEBSITE . "–  ({$data->leadname}) – Booking Confirmation # ( {$data->confirmation} )";

                $config = array(
                    'mailtype' => 'html',
                    'charset' => 'utf-8',
                );
                $html = $this->load->view("hotelTicketOffline", compact("data"), true);
                $this->load->library('email', $config);
                $this->email->set_newline("\r\n");
                $this->email->reply_to(EMAIL_B, WEBSITE);
                $this->email->from(EMAIL_B, WEBSITE);
                $to = $data->leademail;

                $this->email->to($to);
                $this->email->bcc([EMAIL_B, "dkmahtog@gmaik.com.com"]);
                $this->email->subject($subject);
                $this->email->message($html);
                if ($this->email->send()) {
                    $this->db->update("hotel_query", ["mail" => 1], ["confirmation" => $reference]);
                }
            }
        } else {
            echo show_404();
        }
    }

    public function fetchForm()
    {

        $key = json_encode($this->input->post('key'));
        $adult = json_encode($this->input->post('adult'));
        $child = json_encode($this->input->post('child'));
        $age = json_encode($this->input->post('age'));
        $hotel = json_encode($this->input->post('hotel'));
        $this->session->set_userdata("key", $key);
        $this->session->set_userdata("adult", $adult);
        $this->session->set_userdata("child", $child);
        $this->session->set_userdata("age", $age);
        $this->session->set_userdata("hotel", $hotel);

        echo 'Hotel/registrationDetails';
    }

    public function registrationDetails()
    {
        if ($this->session->userdata('key') != null && $this->session->userdata('adult') != null) {

            $response = json_decode($this->getRooms(json_decode($this->session->userdata('key'))));
            $images = json_decode($this->getHotelImage(json_decode($this->session->userdata('hotel'))));
            $this->load->view("includes/header");
            $this->load->view("book-hotel", compact('response', 'images'));
            $this->load->view("includes/footer");
        } else {
            show_404();
        }
    }

    public function selectRoom()
    {
        if ($this->input->post('key')) {
            $response["response"] = json_decode($this->getRooms($this->input->post('key')));
            $response["adult"] = $this->input->post('adult') != null ? ($this->input->post('adult')) : null;
            $response["child"] = $this->input->post('child') != "" ? ($this->input->post('child')) : null;
            $response["age"] = $this->input->post('age') != null ? ($this->input->post('age')) : null;
            $response["key"] = $this->input->post('key') != null ? ($this->input->post('key')) : null;
            echo json_encode($response);
        } else {
            echo json_encode(["result" => "1"]);
        }
    }


    public function buildUrlRegistration()
    {
        if ($this->input->post('key')) {
            $response["response"] = json_decode($this->getRooms($this->input->post('key')));
            $response["adult"] = $this->input->post('adult') != null ? ($this->input->post('adult')) : null;
            $response["child"] = $this->input->post('child') != "" ? ($this->input->post('child')) : null;
            $response["age"] = $this->input->post('age') != null ? ($this->input->post('age')) : null;
            $response["key"] = $this->input->post('key') != null ? ($this->input->post('key')) : null;
            echo json_encode($response);
        } else {
            echo json_encode(["result" => "No result found"]);
        }
    }

    public function payment()
    {

        if ($this->input->post('cardholderfname') && $this->input->post('cardholderlname') && $this->input->post('cardholderemail')) {
            $response =  ($this->getRooms(json_decode($this->input->post('key'))));
            $booking = mt_rand(999, 9999);
            $booking = 'FA' . $booking;
            $this->db->insert('tbl_hotel_booking', ['booking_id' => $booking, "datentime" => date("Y-m-d"), 'hotel_data' => $response, 'first_email' => $this->input->post('email')[0][0], 'booking_data' => json_encode($this->input->post()), 'first_contact' => $this->input->post('contact')[0][0]]);

            return redirect("Hotel/thanks/$booking");
        }
    }


    public function thanks()
    {
        $data =  $this->uri->segment('3');
        $allData = $this->db->get_where("tbl_hotel_booking", ['booking_id' => $data])->result();
        $this->load->view("hotelTicket", compact('allData'));
    }
}
