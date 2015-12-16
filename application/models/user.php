<?php

class user extends CI_Model{
    public function getAllUser()
    {
        $query = $this->db->query("SELECT * FROM tbl_user");
        return $query->result();
    }
    public function getUser()
    {
         $this->db->select('*');
         $this->db->from('tbl_user');
         $query = $this->db->get();
         return $query->result();
    }
    public function delete()
    {

    }
    public function viewEdit()
    {
//        $this->db->get('tbl_user');
//        $query = $this->db->where('user_id',$id);
//        return $query->result_array();
//        $this->db->where('user_id', $id);
//        $this->db->from('tbl_user');
//        $query = $this->db->get();
//        $this->db->select('*');
//        $this->db->from('tbl_user');
//        $this->db->where('user_id',$id);
//        $this->db->limit(1);
//        return $this->db->get()->result_array();
        $user_id = $this->input->post('id');
        $this->db->where('user_id', $user_id);
        $query = $this->db->get('tbl_user');

        foreach ($query->result_array() as $row)
        {
            $res=array(
                'user_id' => $row['user_id'],
                'user_fullname' => $row['user_fullname'],
                'user_course' => $row['user_course'],
                'user_age' => $row['user_age'],
            );
        }
        return json_encode($res);
    }
    public function update()
    {
        $user_id = $this->input->post('id');
        $data = array(
            'user_fullname' => $this->input->post['fullName'],
            'user_course' => $this->input->post['Course'],
            'user_age' => $this->input->post['Age'],
        );
        $this->db->where('user_id', $user_id);
        $this->db->update('tbl_user', $data);
    }
}
?>