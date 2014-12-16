<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mengelolasumber extends CI_Controller {
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
		$this->load->view('mengelolasumber');
	}
	public function submit()
	{
		$nama=$this->input->post('namasumber');
		if ($nama==="salah")
		{
			$this->load->view('Gagal1');
		}
		else
		{
			$this->load->view('Sukses1');
		}
	}
	public function update()
	{
		$nama=$this->input->post('namasumber');
		if ($nama==="salah")
		{
			$this->load->view('Gagal1');
		}
		else
		{
			$this->load->view('Sukses1');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */