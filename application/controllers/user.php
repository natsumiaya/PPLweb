<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$user=$this->input->post('username');
		if ($user==="admin")
		{
			$this->load->view('homeadmin');
		}
		elseif($user==="user")
		{
			$this->load->view('homeuser');
		}
		elseif($user==="bpp")
		{
			$this->load->view('homebpp');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */