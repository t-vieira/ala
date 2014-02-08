<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('language');
		$this->load->language('systemAla', 'portuguese-br');
	}
	
	public function variaveis()
	{
		
	}
	
	public function idioma()
	{
		$speeches = $this->lang->line('speeches');
	}
	
	public function index()
	{		
		$this->load->view('index');
	}	
}

?>