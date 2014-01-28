<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Tabela_membro extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(array(
			'idMembro' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'nomeMembro' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			
		));
		
		$this->dbforge->add_key('idMembro', TRUE);
		
		$this->dbforge->create_table('Membros');
	}
	
	public function down()
	{
		$this->dbforge->drop_table('Membros');
	}
}

?>