<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Membros_model extends CI_Model
{
	public function retornarMembroPorId($id)
	{
		$this->db->where('idMembro', $id);
		
		return $this->db->get('Membros')->result();
	}
	
	public function ultimosMembros()
	{
		$this->db->order_by('idMembro', 'desc');
		
		return $this->db->get('Membros', 10)->result();
	}
	
	public function discursantesMaisAntigos()
	{
		$this->db->order_by('dataDiscurso', 'desc');
		
		return $this->db->get('Discursos', 10)->result();
	}
}

?>