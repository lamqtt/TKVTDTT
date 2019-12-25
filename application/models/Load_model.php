<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Load_model extends CI_Model {

    public $variable;

    public function __construct()
    {
        parent::__construct();
        
    }

    function curlall($a)
    {
         $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/solr/lamttq/select?q=".$a);
        curl_setopt($ch, CURLOPT_PORT, 8983);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_TIMEOUT, '4');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $data = json_decode(curl_exec($ch), TRUE);



        curl_close($ch);

        return count($data['response']['docs']);
    }

    function curl($a,$l)
    {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "http://localhost/solr/lamttq/select?q=".$a."&rows=10&start=".$l);
        curl_setopt($ch, CURLOPT_PORT, 8983);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_TIMEOUT, '4');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $data = json_decode(curl_exec($ch), TRUE);



        curl_close($ch);

        return $data['response']['docs'];
    }
}

/* End of file Load_model.php */
/* Location: ./application/models/Load_model.php */