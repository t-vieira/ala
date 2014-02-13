<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Tabela_pensamentos extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(array(
			'idPensamento' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'textoPensamento' => array(
				'type' => 'TEXT',
			),
			'autorId' => array(
				'type' => 'INT',
				'constraint' => 5,
			),
			'fontePensamento' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => TRUE,
			),
			
		));
		
		$this->dbforge->add_key('idPensamento', TRUE);
		
		$this->dbforge->create_table('Pensamentos');
	}
	
	public function down()
	{
		$this->dbforge->drop_table('Pensamentos');
	}
}

?>