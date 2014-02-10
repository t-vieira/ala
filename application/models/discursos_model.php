<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Discursos_model extends CI_Model
{
	public function discursantesMaisAntigos()
	{
		$this->db->order_by('dataDiscurso', 'asc');
		
		return $this->db->get('Discursos', 10)->result();
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