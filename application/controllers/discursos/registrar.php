<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper(array('language', 'form', 'datas'));
		
		$this->load->language('systemAla', 'portuguese-br');
		
		$this->load->model('Membros_model');
		
		$this->load->model('Discursos_model');
	}
	
	public function variaveis()
	{
		$data = array();
		
		$data['view'] = 'discursos/registrar';
		
		$data['optionTodosMembros'] = $this->retornarTodosMembros();
		
		return $data;
	}
	
	public function index()
	{
		if (!$this->session->userdata('logado')) {
			
			redirect('login', 'refresh');
			
		}
		
		$this->registrar();
		
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
					'rules' => 'required'
				),
				array(
					'field' => 'dataDiscurso',
					'label' => 'Data do Discurso',
					'rules' => 'required'
				),
			);
			
			$this->form_validation->set_rules($regras);
			
			if ($this->form_validation->run()) {
				
				if ($this->input->post('temaDiscurso') === "") {
					$temaDiscurso = utf8_encode('Não Informado');
				} else {
					$temaDiscurso = $this->input->post('temaDiscurso');
				}
				
				$post = array(
					'membroId' => $this->input->post('nomeMembro'),
					'temaDiscurso' => $temaDiscurso,
					'dataDiscurso' => converteData($this->input->post('dataDiscurso'))
				);
				
				if ($this->Discursos_model->salvar($post) == true) {
					
					$this->session->set_flashdata('alerta', '<div class="alert alert-success alert-dismissable">
															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
															'.$this->lang->line('alertSuccessRegisterSpeeche').'</div>');
															
				} else {
					
					$this->session->set_flashdata('alerta', '<div class="alert alert-warning alert-dismissable">
															<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
															'.$this->lang->line('alertWarningSpeecheAlreadyExist').'</div>');
					
				}
				
				redirect(current_url());
			}
		}
	}
	
	public function retornarTodosMembros()
	{
		$membros = $this->Membros_model->retornarTodosMembros();
		
		$optionTodosMembros = '<option value""></option></option>';
		
		foreach ($membros as $membro) {
			
			$optionTodosMembros .= '
				<option value="'.$membro->idMembro.'">'.utf8_decode($membro->nomeMembro).'</option>
			';
			
		}
		
		return $optionTodosMembros;
	}
}

?>