<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Membros_model extends CI_Model
{
	public function retornarTodosMembros()
	{
		$this->db->order_by('nomeMembro', 'asc');
		return $this->db->get('Membros')->result();
	}
	
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
	
	public function salvar($post)
	{
		$this->db->select('nomeMembro');
		$this->db->where('nomeMembro', $post['nomeMembro']);
		$resultado = $this->db->get('Membros')->result();
		
		if (!$resultado) {
			
			$this->db->insert('Membros', $post);
			
			return true;
			
		} else {
			
			return false;
			
		}
	}
}

?>