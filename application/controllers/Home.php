<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index()
	{
		$data['banner'] = $this->home_model->getBanner();
		$data['article'] = $this->home_model->getArticle();
		$data['about'] = $this->home_model->getAbout();
		$this->load->view('navbar_main');
		$this->load->view('home', $data);
		$this->load->view('footer_main');
	}

	public function pemesanan_nonmarket(){
		$this->load->view("pemesanan_nonmarket");
	}

	public function komplain_nonMarket(){
		$this->load->view("komplain_nonMarket");
	}

}
