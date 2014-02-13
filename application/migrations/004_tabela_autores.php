<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Tabela_autores extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(array(
			'idAutor' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'nomeAutor' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			
		));
		
		$this->dbforge->add_key('idAutor', TRUE);
		
		$this->dbforge->create_table('Autores');
	}
	
	public function down()
	{
		$this->dbforge->drop_table('Autores');
	}
}

?>