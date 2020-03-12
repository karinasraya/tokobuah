<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		return redirect('/admin/login');
		// $this->load->view('welcome_message');
	}

	// public function about()
	// {
	// 	$this->load->view('about.php');
	// }

	// public function contact()
	// {
	// 	$this->load->view('contact.php');
	// }
	
    // public function percobaan()
    // {
    //     $data["products"] = $this->product_model->getAll();
    //     var_dump($data["products"]);
    // }
}
