<?php

defined('BASEPATH') or exit('No direct script access allowed');
/*
 * ***************************************************************
 *  Script : 
 *  Version : 
 *  Date :
 *  Author : PAW! Development Semarang
 *  Email : pawdev.id@gmail.com
 *  Description : 
 * ***************************************************************
 */

/**
 * Description of Home
 *
 * @author adi
 */
class Home extends MY_Controller
{

  protected $data = array();

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Home_qry');
  }

  //redirect if needed, otherwise display the user list

  public function index()
  {
    $this->template
      ->title("Dashboard")
      ->set_layout('main')
      ->build('index', $this->data);
  }

  public function getWidgets()
  {
    $param = $this->input->post('param');
    if (!$param) {
      $param = 'positif';
    }
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.kawalcorona.com/{$param}/",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Cookie: __cfduid=de5154c0580487726c42bbd4dda9123e31585071426"
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
  }

  public function getGlobal(){
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://api.kawalcorona.com/",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "Cookie: __cfduid=de5154c0580487726c42bbd4dda9123e31585071426"
      ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;
  }
}
