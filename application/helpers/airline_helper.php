<?php

if (!function_exists("getAirlineName")) {
    function getAirlineName($code)
    {
        $CI = &get_instance();
        $data = $CI->db->get_where("tbl_airlines", ["code" => $code])->result();
        if (count($data)>0) {
            return $data[0]->name;
        }
        return $code;
    }
}

if (!function_exists("getClassCode")) {
    function getClassCode($str)
    {
        switch ($str) {
            case "ECONOMY":
                return "Y";

            case "PREMIUM_ECONOMY":
                return "P";
            case "BUSINESS":
                return "C";
            case "FIRST":
                return "F";
        }
    }
}

if (!function_exists("encode")) {
    function encode($str)
    {
        return  $value = str_replace('=', '-', str_replace('/', '_', ($str)));
    }
}
if (!function_exists("decode")) {
    function decode($str)
    {
        return  $value = (str_replace('-', '=', str_replace('_', '/', $str)));
    }
}

if (!function_exists("getLocName")) {
    function getLocName($code)
    {
        $CI = &get_instance();
        $data = $CI->db->get_where("tbl_airline_search", ["code" => $code])->result();
        if (isset($data)) {
            return str_ireplace(["// "], "", $data[0]->airline);
        }
        return $code;
    }
}
if (!function_exists("getMarkupByClass")) {
    function searchMe($class, $flight, $arr)
    {

        $task = [];
        foreach ($arr as $d) {


            if (strpos($d->classmark, $class) !== false  && strpos($d->airmark, $flight) !== false) {

                $task = ["id" => $d->main_id];
            }
        }
        if (count($task) > 0) {
            return $task;
        }
    }

    function getMarkupByClass($arr, $act_price)
    {
        $CI = &get_instance();
        $data = $CI->db->query("select  tbl_markup.id as main_id,mark_amt,priceType,tbl_airline_markup.mark_value as airmark,tbl_class_markup.mark_value as classmark from tbl_markup JOIN tbl_airline_markup on tbl_airline_markup.mark_id=tbl_markup.id JOIN tbl_class_markup on tbl_class_markup.mark_id=tbl_markup.id where tbl_markup.is_airline=1 and tbl_markup.is_class=1 GROUP BY tbl_markup.id")->result();
        $arrayTo_return = [];
        foreach ($arr as $mark) {
            $searchMe = searchMe($mark["class"], $mark["air"], $data);
            if ($searchMe) {
                $arrayTo_return[] = $searchMe["id"];
            }
        }
        if (count($arrayTo_return) == 1) {
            foreach ($arrayTo_return as $arrda) {
                $for_one = $CI->db->get_where("tbl_markup", ["id" => $arrda])->result();
                if (count($for_one) > 0) {
                    if ($for_one[0]->priceType == 1) {
                        return  number_format((floatval($act_price) * $for_one[0]->mark_amt / 100), 2, '.', '');
                    } else {
                        return  number_format((floatval($for_one[0]->mark_amt)), 2, '.', '');
                    }
                }
            }
        } else if (count($arrayTo_return) == 2) {
            $total = 0;
            foreach ($arrayTo_return as $arrda) {
                $for_one = $CI->db->get_where("tbl_markup", ["id" => $arrda])->result();
                if (count($for_one) > 0) {

                    if ($for_one[0]->priceType == 1) {
                        $total +=  number_format((floatval($act_price) * $for_one[0]->mark_amt / 100), 2, '.', '');
                    } else {
                        $total += number_format((floatval($for_one[0]->mark_amt)), 2, '.', '');
                    }
                }
            }
            return number_format($total / 2, 2, '.', '');
        } else {
            return 0;
        }
    }
}

if (!function_exists("getAirlineTime")) {
    function getAirlineTime()
    {
        $CI = &get_instance();

        $data = $CI->db->get_where("tbl_timings", ["from_date<=" => date("Y-m-d"), "to_date>=" => date("Y-m-d")])->result();
        return $data;
    }
}


if (!function_exists("getAirlineMarkup")) {
    function getAirlineMarkup($id)
    {
        $CI = &get_instance();
        return $data = $CI->db->get_where("tbl_airline_markup", ["mark_id" => $id])->result()[0]->mark_value;
    }
}
if (!function_exists("getCabinMarkup")) {
    function getCabinMarkup($id)
    {
        $CI = &get_instance();
        return $data = $CI->db->get_where("tbl_cabin_markup", ["mark_id" => $id])->result()[0]->mark_value;
    }
}
if (!function_exists("getClassMarkup")) {
    function getClassMarkup($id)
    {
        $CI = &get_instance();
        return $data = $CI->db->get_where("tbl_class_markup", ["mark_id" => $id])->result()[0]->mark_value;
    }
}
if (!function_exists("getFromDestinationMark")) {
    function getFromDestinationMark($id)
    {
        $CI = &get_instance();
        return $data = $CI->db->get_where("tbl_from_mark", ["mark_id" => $id])->result()[0]->mark_value;
    }
}
if (!function_exists("getToDestinationMark")) {
    function getToDestinationMark($id)
    {
        $CI = &get_instance();
        return $data = $CI->db->get_where("tbl_to_mark", ["mark_id" => $id])->result()[0]->mark_value;
    }
}
if (!function_exists("getPaxMark")) {
    function getPaxMark($id)
    {
        $CI = &get_instance();
        return $data = $CI->db->get_where("tbl_pax_markup", ["mark_id" => $id])->result()[0]->mark_value;
    }
}
if (!function_exists("getFromDateMark")) {
    function getFromDateMark($id)
    {
        $CI = &get_instance();
        return $data = $CI->db->get_where("tbl_date_from_mark", ["mark_id" => $id])->result()[0]->mark_value;
    }
}
if (!function_exists("getToDateMark")) {
    function getToDateMark($id)
    {
        $CI = &get_instance();
        return $data = $CI->db->get_where("tbl_date_to_mark", ["mark_id" => $id])->result()[0]->mark_value;
    }
}

if (!function_exists("getCabinType")) {
    function getCabinType($cabin)
    {
        switch ($cabin) {
            case "P":
                return "Premium Economy";
                break;
            case "F":
                return "First Class";
                break;
            case "J":
                return "Business Class";
                break;
            case "C":
                return "Business Class";
                break;
            case "S":
                return "Economy";
                break;
            case "Y":
                return "Economy";
                break;
            default:
                return "Economy";
        }
    }
}
if (!function_exists("getLowestPrice")) {
    function getLowestPrice($key, $array)
    {
        $prices = $array[$key];
        if (count($prices) > 0) {
            echo min($prices);
        } else {
            echo "-";
        }
    }
}
if (!function_exists("getAirlineCount")) {
    function getAirlineCount($key, $array)
    {
        echo count($array[$key]);
    }
}

if (!function_exists("getNotAirline")) {
    function getNotAirline($code)
    {
        $CI = &get_instance();
        $data =  $CI->db->order_by("priority", "asc")->get_where("tbl_markup")->result();
        return    count($data);
    }
}

if (!function_exists("getKeyid")) {
    function getKeyid(array $arr)
    {
        $arra = [];
        foreach ($arr as $key => $value) {
            if (isset($value)) {
                foreach ($value as $k => $c) {

                    if (array_product($c) == 1) {
                        $arra[] = $k;
                    }
                }
            }
        }
     
        $marku = [];
        $CI = &get_instance();
        foreach ($arra as $keyid => $id) {
            $query = $CI->db->get_where("tbl_markup", ["id" => $id])->result();
            $marku[] = ["price" => $query[0]->mark_amt, "type" => $query[0]->priceType, "id" =>  $id, "priority" => $query[0]->priority];
        }

        $data = array_reduce($marku, function ($a, $b) {
            return @$a['priority'] > $b['priority'] ? $a : $b;
        });


        return $data;
    }
}

if (!function_exists('array_key_last')) {
    function array_key_last(array $array)
    {
        if (!empty($array)) return key(array_slice($array, -1, 1, true));
    }
}

if (!function_exists("getMarkAirline")) {
    function getMarkAirline($airline = "", $cabin = "", $from_des = "", $to_des = "", $class = "", $pax = "", $from_date = "", $to_date = "")
    {
        $CI = &get_instance();
        $arr =  getMarkup();

        $as = [];
        foreach ($arr as $key => $value) {
            $isok = [];
            foreach ($value as $key2 => $inner) {


                if ($inner == "tbl_airline_markup") {
                    $query = $CI->db->like('mark_value', $airline, 'both')->get_where("$inner", ["mark_id" => $key])->result();
                    if (count($query) > 0)
                        $isok[$key][] = 1;
                    else   $isok[$key][] = 0;
                }
                if ($inner == "tbl_cabin_markup") {
                    $query = $CI->db->like('mark_value', $cabin, 'both')->get_where("$inner", ["mark_id" => $key])->result();

                    if (count($query) > 0)
                        $isok[$key][] = 1;
                    else   $isok[$key][] = 0;
                }
                if ($inner == "tbl_from_mark") {
                    $query =  $CI->db->like('mark_value', $from_des, 'both')->get_where("$inner", ["mark_id" => $key])->result();


                    if (count($query) > 0)
                        $isok[$key][] = 1;
                    else   $isok[$key][] = 0;
                }
                if ($inner == "tbl_class_markup") {
                    $query =  $CI->db->like('mark_value', $class, 'both')->get_where("$inner", ["mark_id" => $key])->result();

                    if (count($query) > 0)
                        $isok[$key][] = 1;
                    else   $isok[$key][] = 0;
                }
                if ($inner == "tbl_to_mark") {
                    $query = $CI->db->like('mark_value', $to_des, 'both')->get_where("$inner", ["mark_id" => $key])->result();

                    if (count($query) > 0)
                        $isok[$key][] = 1;
                    else   $isok[$key][] = 0;
                }
                if ($inner == "tbl_pax_markup") {
                    $query = $CI->db->like('mark_value', $pax, 'both')->get_where("$inner", ["mark_id" => $key])->result();

                    if (count($query) > 0)
                        $isok[$key][] = 1;
                    else   $isok[$key][] = 0;
                }
            }

            $as[] = $isok;
        }
      
    
        if ($as != null) {
            $id = (getKeyid($as));
            if ($id) {
                // $query = $CI->db->get_where("tbl_markup", ["id" => $id])->result();
                return ["price" => $id["price"], "type" => $id["type"]];
            }
        }
        
    }
}

function get_data($page_name)
{
    $CI = &get_instance();
    // Query the "header_table" for a row where the "page_name" column matches the provided page name
    $page_nam = $CI->db->get_where("header_table", ["page_name" => '/' . $page_name])->result();

    return $page_nam;
}

if (!function_exists("getMarkup")) {
    function getMarkup()
    {
        $CI = &get_instance();
        $data =  $CI->db->order_by("id", "asc")->get("tbl_markup")->result();
        $arr = [];

        $isset = 0;
        foreach ($data as $key => $value) {
            if ($value->is_airline == 1) {
                $arr[$value->id][] = "tbl_airline_markup";
            }
            if ($value->is_cabin == 1) {
                $arr[$value->id][] = "tbl_cabin_markup";
            }
            if ($value->is_from == 1) {
                $arr[$value->id][] = "tbl_from_mark";
            }
            if ($value->is_class == 1) {
                $arr[$value->id][] = "tbl_class_markup";
            }
            if ($value->is_to == 1) {
                $arr[$value->id][] = "tbl_to_mark";
            }
            if ($value->is_from_date == 1) {
                $arr[$value->id][] = "tbl_date_from_mark";
            }
            if ($value->is_to_date == 1) {
                $arr[$value->id][] = "tbl_date_from_mark";
            }
        }

        return ($arr);
    }
}
