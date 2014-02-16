<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Tabela_citacoes extends CI_Migration
{
	public function up()
	{
		$this->dbforge->add_field(array(
			'idCitacao' => array(
				'type' => 'INT',
				'constraint' => 5,
				'unsigned' => TRUE,
				'auto_increment' => TRUE,
			),
			'textoCitacao' => array(
				'type' => 'TEXT',
			),
			'autorId' => array(
				'type' => 'INT',
				'constraint' => 5,
			),
			'fonteCitacao' => array(
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => TRUE,
			),
			
		));
		
		$this->dbforge->add_key('idCitacao', TRUE);
		
		$this->dbforge->create_table('Citacoes');
	}
	
	public function down()
	{
		$this->dbforge->drop_table('Citacoes');
	}
}

?>