<?php

defined('BASEPATH') OR exit('No direct script access allowed');
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
 * Description of About
 *
 * @author adi
 */
class About extends MY_Controller {

    protected $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('About_qry');
    }

    //redirect if needed, otherwise display the user list

    public function index() {
        $this->template
                ->title("About")
                ->set_layout('main')
                ->build('index', $this->data);
    }
}
