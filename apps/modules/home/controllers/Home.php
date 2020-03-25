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
  protected $countries = array();

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Home_qry');

    $countries = $this->getAffectedCountries();
    if(is_array($countries)){
      foreach($countries['affected_countries'] as $val){
        $this->countries[$val] = $val;
      }
    }
  }

  //redirect if needed, otherwise display the user list

  public function index()
  {
    $this->initIndex();
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

  public function getGlobal()
  {
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

  public function getHistoryCountry()
  {
    $arr = $this->input->post();
    $curl = curl_init();
    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://coronavirus-monitor.p.rapidapi.com/coronavirus/cases_by_particular_country.php?country=".$arr['countries'],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "x-rapidapi-host: coronavirus-monitor.p.rapidapi.com",
        "x-rapidapi-key: " . KEY_RAPIDAPI
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      echo "cURL Error #:" . $err;
    } else {
      echo $response;
    }
  }

  private function getAffectedCountries()
  {
    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => "https://coronavirus-monitor.p.rapidapi.com/coronavirus/affected.php",
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_HTTPHEADER => array(
        "x-rapidapi-host: coronavirus-monitor.p.rapidapi.com",
        "x-rapidapi-key: " . KEY_RAPIDAPI
      ),
    ));

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
      return "cURL Error #:" . $err;
    } else {
      return json_decode($response, true);
    }
  }

  private function initIndex()
  {
    $this->data['form'] = array(
      'periode' => array(
        'placeholder' => 'Periode',
        'id' => 'periode',
        'name' => 'periode',
        'value' => date('d-m-Y'),
        'class' => 'form-control add-input-text calendar',
        'maxlength' => '10',
      ),
      'countries' => array(
        'attr' => array(
          'placeholder' => 'Negara',
          'id' => 'countries',
          'class' => 'form-control ',
        ),
        'data' => $this->countries,
        'value' => '',
        'name' => 'countries',
      ),
    );
  }
}
