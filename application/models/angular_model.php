<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Angular_model extends CI_Model{
    public function insert()
    {
        $data = json_encode(file_get_contents("php://input"),true);
        $user_fullname = $data->user_fullname;
        $user_course = $data->user_course;
        $user_age = $data->user_age;

        $datas=array(
            'user_fullname'=>$user_fullname,
            'user_course'=>$user_course,
            'user_age'=>$user_age
        );
        $this->db->insert('tbl_user',$datas);
        return($this->db->affected_rows()!=1)?false:true;
    }
}