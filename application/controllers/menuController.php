<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class menuController extends CI_Controller {

	public function index()
	{
		$this->load->view('menu');
	}
}