<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Discursos_model extends CI_Model
{
	public function discursantesMaisAntigos($limite = null)
	{
		$this->db->group_by('membroId');
		$this->db->order_by('dataDiscurso', 'asc');
		
		if ($limite != null) {
			
			return $this->db->get('Discursos', $limite)->result();
			
		} else {
			
			return $this->db->get('Discursos')->result();
			
		}
		
	}
	
	public function retonarTodosDiscursantes()
	{
		$this->db->order_by('dataDiscurso', 'desc');
		
		return $this->db->get('Discursos')->result();
	}
	
	public function salvar($post)
	{
		$this->db->select('membroId');
		$this->db->select('dataDiscurso');
		$this->db->where('membroId', $post['membroId']);
		$this->db->where('dataDiscurso', $post['dataDiscurso']);
		$resultado = $this->db->get('Discursos')->result();
		
		if (!$resultado) {
			
			$this->db->insert('Discursos', $post);
			
			return true;
			
		} else {
			
			return false;
			
		}
	}
}

?>