<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->library("form_validation");
        $this->form_validation->set_rules("username", "Username", "required");
        $this->form_validation->set_rules("password", "Password", "required");
        if ($this->form_validation->run() == false) {
            $this->load->view("Admin/login");
        } else {
            $this->db->cache_delete_all();
            $username = $this->security->xss_clean($this->input->post("username"));
            $password = $this->security->xss_clean($this->input->post("password"));
            $user = $this->db->get_where("tbl_user", ["username" => $username])->result();
           
            if ($user) {

               
                if (password_verify($password, $user[0]->password) == TRUE) {
                    $this->session->set_userdata("username", $username);
                    return redirect("Admin");
                } else {
                    $this->session->set_flashdata("msg", "<div class='alert-box danger'>Invalid credentials !</div>");
                    return redirect("Login");
                }
            } else {
                $this->session->set_flashdata("msg", "<div class='alert-box danger'>Invalid credentials !</div>");
                return redirect("Login");
            }
        }
    }
}
