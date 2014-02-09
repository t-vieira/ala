<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function calcular_diferenca_data($data)
{
	$retorno = '';
	$hoje = new DateTime();
	$d = new DateTime($data);
	
	$diff = $hoje->diff($d);
	
	if ($diff->days == 0) {
		$retorno = 'hoje';
	} else {
		$retorno .= 'há ';
		if ($diff->y > 0) {
			$u = ($diff->y > 1) ? 'anos' : 'ano';
			$retorno .= "{$diff->y} {$u} e ";
		}
		if ($diff->m > 0) {
			$u = ($diff->m > 1) ? 'meses' : 'mês';
			$retorno .= "{$diff->m} {$u} e ";
		}
		if ($diff->d > 0) {
			$u = ($diff->d > 1) ? 'dias' : 'dia';
			$retorno .= "{$diff->d} {$u} ";
		}
	}
	
	return $retorno;
}

?>