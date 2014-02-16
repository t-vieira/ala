<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper(array('language', 'form'));
		
		$this->load->language('systemAla', 'portuguese-br');
		
		$this->load->model('Membros_model');
	}
	
	public function variaveis()
	{
		$data = array();
		
		$data['view'] = 'membros/registrarMembro_view';
		
		return $data;
	}
	
	public function index()
	{
		if (!$this->session->userdata('logado')) {
			
			redirect('login', 'refresh');
			
		}
		
		$this->registrar(); // Cadastrar o membro
		
		$this->load->view('base', $this->variaveis());
	}
	
	public function registrar()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-danger">', '</div>');
		
		if ($this->input->post()) {
			
			$regras = array(
				array(
					'field' => 'nomeMembro',
					'label' => 'Nome do Membro',
					'rules' => 'required|min_length[5]'
				),
			);
			
			$this->form_validation->set_rules($regras);
			
			if ($this->form_validation->run()) {
				
				$post = array(
					'nomeMembro' => $this->input->post('nomeMembro')
				);
				
				if ($this->Membros_model->salvar($post) == true) {
					
					$this->session->set_flashdata('alerta', '<div class="alert alert-success alert-dismissable">
															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
															'.$this->lang->line('alertSuccessRegisterMember').'</div>');
															
				} else {
					
					$this->session->set_flashdata('alerta', '<div class="alert alert-warning alert-dismissable">
															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
															'.$this->lang->line('alertWarningMemberAlreadyExist').'</div>');
					
				}
				
				redirect(current_url());
			}
			
		}
	}
}

?>