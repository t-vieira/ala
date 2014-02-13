<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Tabela_usuarios extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(array(
			'idUsuario' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'nomeUsuario' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'senhaUsuario' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'emailUsuario' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			
		));
		
		$this->dbforge->add_key('idUsuario', TRUE);
		
		$this->dbforge->create_table('Usuarios');
	}
	
	public function down()
	{
		$this->dbforge->drop_table('Usuarios');
	}
}

?>