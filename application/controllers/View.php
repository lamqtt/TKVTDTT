<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library("session");

    }

    public function index()
    {
        $this->load->view('Home_view');
    }

    function search($l)
    {   
        if (!empty($_POST['data'])) {
            $a = $this->input->post('data');
            $this->session->set_userdata('data', $a);
        } else {
            $a = $this->session->userdata('data');
        }

        
        $this->load->model('Load_model');

        $z = $this->Load_model->curlall($a);
        $f = $this->Load_model->curl($a,$l);

        $b = array();
        for ($i = 0; $i <count($f) ; $i++) {
            $d = json_decode($f[$i]['_src_'], TRUE);
            array_push( $b, $d);
        }



        //print_r($f);
        
        // $string = file_get_contents("./Asset/adf.json");
        // $a= json_decode($string, true);


        $data = [
            'a' => $b,
            'c' => $a,
            'p' => $z,
            'l' => $l
        ];

       // echo $a[0]['title'];
       // echo $a[0]['href'];
       // echo $a[0]['sub_content']
        $this->load->view('Result_view', $data);
    }


}

/* End of file View.php */
/* Location: ./application/controllers/View.php */