<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Migrate extends CI_Controller
{
	public function migration()
    {
        $this->load->library('migration');

        if(! $this->migration->current()) {
            echo $this->migration->error_string();
        } else {
            echo "Migration Ok.";
        }
    }
}
?>