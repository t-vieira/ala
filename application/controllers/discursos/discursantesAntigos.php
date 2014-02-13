<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Discursantesantigos extends CI_Controller
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
		
		$data['view'] = 'discursos/discursantesAntigos';
		$data['divDiscursantesMaisAntigos'] = $this->pagina();
		
		return $data;
	}
	
	public function index()
	{
		if (!$this->session->userdata('logado')) {
			
			redirect('login', 'refresh');
			
		}
								
		$this->load->view('base', $this->variaveis());
	}
	
	public function pagina($pagina = 10)
	{
		$this->load->library('pagination');
		
		$config['base_url'] = base_url() . 'discursos/discursantesAntigos/index';
		
		$config['total_rows'] = $this->Discursos_model->contarDiscursantesAntigos();
		$config['per_page'] = $pagina;
		$config['uri_segment'] = 4;
		$config['num_links'] = 10;
		
		$config['full_tag_open'] = '<ul class="pagination pagination-centered">';
		$config['full_tag_close'] = '</ul>';
		$config['prev_link'] = 'Anterior';
		$config['prev_tag_open'] = '<li class="previous">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'Pr&oacute;ximo';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		 
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		 
		$config['first_link'] = '&lt;&lt;';
		$config['last_link'] = '&gt;&gt;';
		
		$this->pagination->initialize($config);
		
		$discursantesAntigos = $this->Discursos_model->discursantesMaisAntigos($config['per_page'], $this->uri->segment(4));
		
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