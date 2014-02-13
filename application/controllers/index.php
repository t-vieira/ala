<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller
{
	public function __construct()
	{		
		parent::__construct();
		
		$this->load->helper('language');
		
		$this->load->library('parser');
		
		$this->load->language('systemAla', 'portuguese-br');
		
		$this->load->helper('datas');
		
		$this->load->model('Membros_model');
		
		$this->load->model('Discursos_model');
	}
	
	public function variaveis()
	{
		$data = array();
		
		$data['view'] = 'index';
		$data['divUltimosMembros'] = $this->ultimosMembros();
		$data['divDiscursantesMaisAntigos'] = $this->discursantesMaisAntigos();
		$data['usuarioSessao'] = $this->session->userdata('logado');
		
		return $data;
	}
	
	public function index()
	{				
		if (!$this->session->userdata('logado')) {
			
			redirect('login', 'refresh');
			
		}
	
		$this->parser->parse('base', $this->variaveis());
	}
	
	public function ultimosMembros()
	{
		$ultimosMembros = $this->Membros_model->ultimosMembros();
		
		$divUltimosMembros = '';
		
		foreach($ultimosMembros as $membro) {
			
			$divUltimosMembros .= '<p class="list-group-item">'.utf8_decode($membro->nomeMembro).'</p>';
			
		}
		
		return $divUltimosMembros;
	}
	
	public function discursantesMaisAntigos()
	{
		$discursantesAntigos = $this->Discursos_model->discursantesMaisAntigos(10);
		
		$divDiscursantesMaisAntigos = '';
		
		foreach($discursantesAntigos as $discursante) {
			
			$nomeMembro = $this->Membros_model->retornarMembroPorId($discursante->membroId);
			
			foreach ($nomeMembro as $membro) {
			
				$divDiscursantesMaisAntigos .= '<p class="list-group-item">
						<i class="fa fa-user fa-fw"></i> '.utf8_decode($membro->nomeMembro).'
						<span class="pull-right text-muted small"><em>'.calcular_diferenca_data($discursante->dataDiscurso).'</em></span>
					</p>';
					
			}
			
		}
		
		return $divDiscursantesMaisAntigos;
	}
		
}

?>