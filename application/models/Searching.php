<?php
class Searching extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        # code...
    }
    public function getIATA($term)
    {
        return  $data =  $this->db->query("select * from tbl_list6 where MATCH(IATAcode) AGAINST ('$term' IN BOOLEAN MODE) or Airport like '%$term%' or CityName LIKE '%$term%'  order by priority desc")->result();
    }
    public function viewMarkup()
    {
        return $this->db->get("tbl_markup")->result();
    }



    public function addMarkup($post)
    {

        $type = $post["type"];



        $this->db->insert("tbl_markup", ["priority" => $post["priority"], "mark_amt" => $post["mark_amt"], "created_at" => date("Y-m-d"), "is_class" => in_array(2, $type) ? 1 : 0, "priceType" => $post["priceType"], "is_airline " => in_array(0, $type) ? 1 : 0, "is_cabin" => in_array(1, $type) ? 1 : 0, "is_from" => in_array(3, $type) ? 1 : 0, "is_to" => in_array(4, $type) ? 1 : 0, "is_pax" => in_array(5, $type) ? 1 : 0, "is_from_date" => in_array(6, $type) ? 1 : 0, "is_to_date" => in_array(7, $type) ? 1 : 0]);
        $last = $this->db->insert_id();
        foreach ($post["type"] as $key => $value) {
            switch ($value) {
                case 0:
                    $this->db->insert("tbl_airline_markup", ["mark_id" => $last, "mark_value" => $post["select_key"][$key]]);
                    break;
                case 1;
                    $this->db->insert("tbl_cabin_markup", ["mark_id" => $last, "mark_value" => $post["select_key"][$key]]);
                    break;
                case 2;
                    $this->db->insert("tbl_class_markup", ["mark_id" => $last, "mark_value" => $post["select_key"][$key]]);
                    break;
                case 3;
                    $this->db->insert("tbl_from_mark", ["mark_id" => $last, "mark_value" => $post["select_key"][$key]]);
                    break;
                case 4;
                    $this->db->insert("tbl_to_mark", ["mark_id" => $last, "mark_value" => $post["select_key"][$key]]);
                    break;
                case 5;
                    $this->db->insert("tbl_pax_markup", ["mark_id" => $last, "mark_value" => $post["select_key"][$key]]);
                    break;
                case 6;
                    $this->db->insert("tbl_date_from_mark", ["mark_id" => $last, "mark_value" => $post["select_key"][$key]]);
                    break;
                case 7;
                    $this->db->insert("tbl_date_to_mark", ["mark_id" => $last, "mark_value" => $post["select_key"][$key]]);
                    break;
                default:
                    break;
            }
        }
    }
}
