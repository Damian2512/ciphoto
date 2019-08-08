<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct(){
	parent::__construct();

	}

	public function index()	{

		//get images from database
$data['images'] = $this->home_model->get_images();

//load view and pass images data
		$this->load->view('home_view', $data);
	}
}
