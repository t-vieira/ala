<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('language');
		
		$this->load->language('systemAla', 'portuguese-br');
		
		$this->load->library('form_validation');
		
		$this->load->model('Usuarios_model');
	}
	
	public function variaveis()
	{
		$data = array();
		
		return $data;
	}
	
	public function index()
	{
		$this->login();
		
		$this->load->view('login_view', $this->variaveis());
	}
	
	public function login()
	{
		$this->form_validation->set_rules('email', 'E-mail', 'trim|required|xss_clean');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required|xss_clean');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
		if ($this->form_validation->run()) {
			
			$login = $this->Usuarios_model->login($this->input->post('email'), $this->input->post('senha'));
			
			if ($login) {
				
				$arraySessao = array();
				
				foreach ($login as $dados) {
					
					$arraySessao = array(
						'nomeUsuario' => $dados->nomeUsuario,
						'emailUsuario' => $dados->emailUsuario
					);
					
					$this->session->set_userdata('logado', $arraySessao);
					
					redirect('index');
					
				}
				
			} else {
				
				$this->session->set_flashdata('alerta', '<div class="alert alert-danger alert-dismissable">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
											'.$this->lang->line('alertErrorLogin').'</div>');
											
				redirect(current_url());
				
			}
			
		}
	}
	
	public function logout()
	{
		$this->session->unset_userdata('logado');
   		//session_destroy();
   		redirect('login', 'refresh');
	}
}

?>