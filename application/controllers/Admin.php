<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends MY_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper("airline");
        $this->load->model("Searching", "search");

        if ($this->session->userdata("username") == '') {
            return redirect("Login");
        }
    }

    public function index()
    {
        $this->db->cache_delete_all();
        $this->load->view("Admin/includes/header");
        $count =  count($this->db->get("tbl_booking")->result());
        $todaybooking =  count($this->db->get_where("tbl_booking", ["datentime" => date('Y-m-d')])->result());

        $this->load->view("Admin/dashboard", ["allbooking" => $count, "todaybooking" => $todaybooking]);
        $this->load->view("Admin/includes/footer");
    }
    public function logout()
    {
        $this->session->unset_userdata("username");
        return redirect("Login");
    }

    public function bookings()
    {
        $this->load->view("Admin/includes/header");
        $data = $this->db->get("tbl_booking")->result();
        $this->load->view("Admin/bookings", compact("data"));
    } public function hotel()
    {
        $this->load->view("Admin/includes/header");
        $data = $this->db->get("tbl_hotel_booking")->result();
        $this->load->view("Admin/hotel_bookings", compact("data"));
    }
    public function timings()
    {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("date_from", 'From date', "required");
        $this->form_validation->set_rules("date_to", 'To date', "required");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view("Admin/includes/header");
            $time = $this->db->get("tbl_timings")->result();
            $this->load->view("Admin/timing", compact("time"));
        } else {
            $this->db->insert("tbl_timings", ["from_date" => date("Y-m-d", strtotime($this->input->post("date_from"))), "to_date" => date("Y-m-d", strtotime($this->input->post("date_to"))), "min" => $this->input->post("time")]);
            $this->db->cache_delete_all();
            $this->session->set_flashdata("msg", "<div class='alert-box success'>Inserted</div>");
            return redirect("Admin/timings");
        }
    }
    public function deleteTime()
    {
        $id = $this->uri->segment(3);
        $this->db->cache_delete_all();
        $this->db->delete("tbl_timings", ["id" => $id]);
        return redirect("Admin/timings");
    }

    public function airlineMarkup()
    {

        $this->load->library("form_validation");
        $this->form_validation->set_rules("mark_amt", 'Amount', "required");
        $this->form_validation->set_rules("priceType", 'Type', "required|numeric");
        $this->form_validation->set_rules("type[]", 'Filter Type', "required");

        if ($this->form_validation->run() == FALSE) {
            $this->load->view("Admin/includes/header");
            $airline = $this->db->get("tbl_airlines")->result();
            $markup = $this->db->query("select * from tbl_markup")->result();
            $location = $this->db->query("select * from tbl_airline_search")->result();
            $this->load->view("Admin/markup", ["airline" => $airline, "location" => $location, "markup" => $markup]);
        } else {
            $post = $this->security->xss_clean($this->input->post());
            $data = $this->search->addMarkup($post);
            $this->db->cache_delete_all();
            $this->session->set_flashdata("msg", "<div class='alert-box success'>Markup added successfully</div>");
            return redirect("Admin/airlineMarkup");
        }
    }

    public function deleteMarkup()
    {
 
        $this->db->delete("tbl_airline_markup", ["mark_id" => $this->uri->segment(3)]);
        $this->db->delete("tbl_cabin_markup", ["mark_id" => $this->uri->segment(3)]);
        $this->db->delete("tbl_class_markup", ["mark_id" => $this->uri->segment(3)]);
        $this->db->delete("tbl_date_from_mark", ["mark_id" => $this->uri->segment(3)]);
        $this->db->delete("tbl_date_to_mark", ["mark_id" => $this->uri->segment(3)]);
        $this->db->delete("tbl_from_mark", ["mark_id" => $this->uri->segment(3)]);
        $this->db->delete("tbl_pax_markup", ["mark_id" => $this->uri->segment(3)]);
        $this->db->delete("tbl_to_mark", ["mark_id" => $this->uri->segment(3)]);
        $this->db->delete("tbl_markup", ["id" => $this->uri->segment(3)]);


        $this->session->set_flashdata("msg", "<div class='alert-box success'>Markup deleted successfully</div>");
        $this->db->cache_delete("Admin", "airlineMarkup");
        $this->db->cache_delete("Result", "index");
        return redirect("Admin/viewMarkup");
    }
    public function viewMarkup()
    {
        $this->load->view("Admin/includes/header");
        $markup = $this->search->viewMarkup();
        $this->load->view("Admin/viewMarkup", compact("markup"));
    }
}
