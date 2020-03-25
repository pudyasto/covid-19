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
 * Description of Indonesia
 *
 * @author adi
 */
class Indonesia extends MY_Controller
{

    protected $data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Indonesia_qry');
    }

    //redirect if needed, otherwise display the user list

    public function index()
    {
        $this->template
            ->title("Monitoring Covid-19 Di Indonesia")
            ->set_layout('main')
            ->build('index', $this->data);
    }

    public function getProivID()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://api.kawalcorona.com/indonesia/provinsi",
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

    public function getNowIndonesia()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://coronavirus-monitor.p.rapidapi.com/coronavirus/latest_stat_by_country.php?country=Indonesia",
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

    public function getHistoryIndonesia()
    {
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://coronavirus-monitor.p.rapidapi.com/coronavirus/cases_by_particular_country.php?country=Indonesia",
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
}
