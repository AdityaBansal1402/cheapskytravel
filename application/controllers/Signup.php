<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('encryption');
    }

    public function Oauth()
    {
        if ($this->input->post()) {
            $data = $this->security->xss_clean($this->input->post());
            $userData =   $this->db->get_where("tbl_user_data", ["email" => $data["email"]])->result();
            if (count($userData) == 0) {
                $this->db->insert("tbl_user_data", ["fullname" => $data['username'], "contact" => $data["contact"], "email" => $data["email"], "password" => password_hash($data["password"], PASSWORD_DEFAULT), "contact" => $data["contact"]]);

                $this->session->set_userdata("email", $data["email"]);
                $this->RegistrationMail($data["email"], $data['username'], $data["contact"]);
                return redirect("dashboard");
            } else {
                return redirect(base_url("") . "?signup=true&status=failed");
            }
        } else {
            show_404();
        }
    }

    private function RegistrationMail($email = "", $name = "", $contact = "")
    {


        $message = "";

        $base = base_url();
        $to_email = $email;
        $subject = "New Registration : " . WEBSITE;
        $message .= "<img style='margin:0 auto' width='50%' src='{$base}tick.jpg'>";
        $message .= "<h2 style='text-align:center'>Thanks for registration !</h2>";
        if ($name) {
            $contact = $contact != '' ? "(" . $contact . ")" : "";
            $message .= "<p style='text-align:center'>Welcome $name {$contact},</p>";
        }
        $message .= "<p>Complete your profile by filling all the details given in my profile section</p>";
        $message .= "<p>It will be used for future bookings</p>";
        $config = array(
            'mailtype' => 'html',
            'charset' => 'iso-8859-1',
        );
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");
        $this->email->from(EMAIL_B, WEBSITE);
        $this->email->to($to_email);
        $this->email->bcc(array("shantanu@nibblesoftware.com"));
        $this->email->subject($subject);
        $this->email->message($message);
        $this->email->send();
    }

    public function googleLogin()
    {
    }

    public function loginurl()
    {
        if ($this->input->post()) {
            $data =  $this->security->xss_clean($this->input->post());
            $is_valid = $this->db->get_where("tbl_user_data", ["email" => $data["email"]])->result();
            if (count($is_valid) > 0) {
                if (password_verify($data["password"], $is_valid[0]->password) == TRUE) {
                    $this->session->set_userdata("email", $data["email"]);
                    return redirect("dashboard");
                } else {
                    return redirect("?signin=true&action=false");
                }
            } else {
                return redirect("?signin=true&action=false");
            }
        } else {
            show_404();
        }
    }
    public function logout()
    {
        $this->session->unset_userdata("email");
        return redirect();
    }
}
