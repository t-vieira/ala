<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Todosdiscursantes extends CI_Controller
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
		
		$data['view'] = 'discursos/todosDiscursantes';
		
		$data['tdTabelaAntigos'] = $this->todosDiscusantes();
		
		return $data;
	}
	
	public function index()
	{		
		$this->load->view('base', $this->variaveis());
	}
	
	public function todosDiscusantes()
	{
		$tdTabelaAntigos = '';
		
		$resultadoAntigos = $this->Discursos_model->retonarTodosDiscursantes();
		
		foreach ($resultadoAntigos as $antigos) {
			
			$resultadoMembros = $this->Membros_model->retornarMembroPorId($antigos->membroId);
			
			foreach ($resultadoMembros as $membro) {
				
				$tdTabelaAntigos .= '
					<tr>
						<td>'.utf8_decode($membro->nomeMembro).'</td>
						<td>'.utf8_decode($antigos->temaDiscurso).'</td>
						<td>'.converteData($antigos->dataDiscurso).'</td>
						<td>'.calcular_diferenca_data($antigos->dataDiscurso).'</td>
					</tr>
				';
				
			}
			
		}
		
		return $tdTabelaAntigos;
	}
}

?>