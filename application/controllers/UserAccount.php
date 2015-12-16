<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAccount extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('Datatables');
        $this->load->library('table');
        $this->load->database();
        $this->load->model('angular_model');
    }
    public function index()
    {
        $this->home();
    }
    public function home()
    {
        $this->load->view('user/landingpage');
    }
    public function landingpage()
    {
        $this->load->view('user/landingpage2');
    }
    public function deletePost()
    {

        $id = $this->input->post('id');
        $this->db->delete('tbl_user', array('user_id' => $id));
    }
    public function editPost()
    {
//        $id = $this->input->post('id');
//        $this->load->model('user');
//        $data['users'] = $this->user->viewEdit($id);
//        echo json_encode($data);
//        $id = trim($this->input->post('id',TRUE));
//        $this->load->model('user');
//        $person = $this->user->viewEdit($id);
//        echo json_encode($person);
        $this->load->model('user');
        $data = $this->user->viewEdit();
        echo $data;
    }
    public function updateSuccess()
    {
        $user_id = $this->input->post('user_id');
        $data = array(
            'user_fullname' => $this->input->post('user_fullname'),
            'user_course' => $this->input->post('user_course'),
            'user_age' => $this->input->post('user_age'),
        );
        $this->db->where('user_id', $user_id);
        $res = $this->db->update('tbl_user', $data);
//        $this->load->model('user');
//        $res = $this->user->update();
        echo $res;
    }
    public function registerSuccess()
    {
        $dataInsert = array(
            'user_fullname' => $this->input->post('fullname'),
            'user_course' => $this->input->post('course'),
            'user_age'   => $this->input->post('age')
        );
        $this->db->insert('tbl_user',$dataInsert);
    }
    public function viewRegister()
    {
        $this->load->view('user/viewRegister');
    }
    function datatable()
    {
//        $result = $this->db->query('SELECT * FROM tbl_user');
        $this->load->model('user');
        $result = $this->user->getAllUser();
        $totalFiltered = $result;

        $data = array();
        foreach($totalFiltered as $row)
        {
            $nestedData=array();
            $nestedData[] = $row->user_id;
            $nestedData[] = $row->user_fullname;
            $nestedData[] = $row->user_course;
            $nestedData[] = $row->user_age;
            $nestedData[] = "<a href=\"#\" id='update'>Edit</a>";
            $data[] = $nestedData;
        }
        $json_data = array(
            "iTotalDisplayRecords"    => count( $result ),
//            "recordsFiltered" => count( $totalFiltered ),
            "aaData"            => $data
        );
        echo json_encode($json_data);
    }
    public function registerView()
    {
        $this->load->model('user');
        $dataArray = array(
        'viewResult' => $this->user->getUser()
        );
        $this->load->view('user/registerview',$dataArray);
    }
    public function Angularjs()
    {
        $this->load->view('user/header');
        $this->load->view('user/Angularjs');
    }
    public function Angularjs2()
    {
        $this->load->view('user/header');
        $this->load->view('user/Angularjs2');
    }
    public function Angularjs3()
    {
        $this->load->view('user/header');
        $this->load->view('user/Angularjs3');
    }
    public function get_details()
    {
        $data = array();
        $output = $this->db->get('tbl_user')->result_array();
        foreach($output as $rows)
        {
            $data[] = array (
                "user_id" => $rows['user_id'],
                "user_fullname" => $rows['user_fullname'],
                "user_course" => $rows['user_course'],
                "user_age" => $rows['user_age']
            );
        }
        print_r(json_encode($data));
        return(json_encode($data));
    }
    public function insert()
    {
        $result=$this->angular_model->insert();
        if($result)
        {
            $arr = array('msg' => "Product Added Successfully", 'error' => '');
            $jsn = json_encode($arr);
        }
        else
        {
            $arr = array('msg' => "", 'error' => 'Error In inserting record');
            $jsn = json_encode($arr);
        }
    }
}
