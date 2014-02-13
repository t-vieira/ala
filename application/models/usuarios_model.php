<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios_model extends CI_Model
{
	function login($email, $senha)
	{
		$this->db->where('emailUsuario', $email);
		$this->db->where('senhaUsuario', MD5($senha));
		$this->db->limit(1);
		$resultado = $this->db->get('Usuarios');
		
		if ($resultado->num_rows() == 1) {
			
			return $resultado->result();
			
		} else {
			
			return false;
			
		}
	}
}

?>