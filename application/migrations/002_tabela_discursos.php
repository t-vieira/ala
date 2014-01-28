<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Tabela_discursos extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(array(
			'idDiscurso' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE
			),
			'membroId' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE
			),
			'temaDiscurso' => array(
				'type' => 'VARCHAR',
				'constraint' => '255'
			),
			'dataDiscurso' => array(
				'type' => 'DATE'
			)
			
		));
		
		$this->dbforge->add_key('idDiscurso', TRUE);
		
		$this->dbforge->create_table('Discursos');
	}
	
	public function down()
	{
		$this->dbforge->drop_table('Discursos');
	}
}

?>