<?php
error_reporting(0);
/*
$atv  = base64_decode('YXRpdmFjYW8ucGhw');
$msg1 = base64_decode('QSBMaWNlbmNhIGV4cGlyYQ==');
$msg2 = base64_decode('QXRpdmFy');
$msg3 = base64_decode('RGF0YSBkbyBzaXN0ZW1hIGludmFsaWRh');

if (file_exists('sesiow.php')) {

	$f = fopen('sesiow.php', 'r');
	$conteudo = fread($f, filesize('sesiow.php'));
	fclose($f);

	$r = explode(':', gzinflate(base64_decode($conteudo)));
	$cliente = $r[0];
	$chxave  =   $r[1];
	$ultatv  =  $r[2];
	$ndias   =   $r[3];
	$dtloc   =   $r[4];

	$dinx = explode('/', date('d/m/Y'));
	$doutx = explode('/', $ultatv);
	$data1 = mktime(0,0,0, $dinx[1],$dinx[0],$dinx[2]);
	$data2 = mktime(0,0,0, $doutx[1],$doutx[0],$doutx[2]);
	$ndif = ($data1-$data2)/(3600*24);


	$dthj = explode('/', date('d/m/Y'));
	$dtatvloc = explode('/', $dtloc);
	$dt1 = mktime(0,0,0, $dthj[1],$dthj[0],$dthj[2]);
	$dt2 = mktime(0,0,0, $dtatvloc[1],$dtatvloc[0],$dtatvloc[2]);
	$numdif = ($dt1-$dt2)/(3600*24);


	if ($numdif > $ndias) {
		echo '<script language="Javascript">window.location = "'.$atv.'";</script>';
	} else {

		#Testa crack da Data Menor
		if ($dt1<$dt2) {
			echo '<script language="Javascript">alert("'.$msg3.'!"); window.location = "'.$atv.'";</script>';
		}

		if ( ($ndias-$numdif) <= 3) {

			if ( ($ndias-$numdif) == 0) {
				$alerta = '<span style="color:#f00;">'.$msg1.' Hoje (<a href="'.$atv.'" style="text-decoration:none; color:#D00;">'.$msg2.'</a>)</span>&nbsp;';
			} else {
				$alerta = '<span style="color:#f00;">'.$msg1.' ' . ($ndias-$ndif) . ' dia(s) (<a href="'.$atv.'" style="text-decoration:none; color:#D00;">'.$msg2.'</a>) </span>&nbsp;';
			}
		}

	}


} else {

	$pagina = explode("/", $_SERVER['SCRIPT_NAME']);

	if (end($pagina) == "sub.php" || end($pagina) == "main.php") {
		echo '<script language="Javascript">window.location = "'.$atv.'";</script>';
	}

}
*/

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'creathus';

// criando a conexao especificando o servidor o usuario e a senha do banco de dados
($conexao = mysql_connect($host, $user, $pass)) or die(mysql_error());
$seldb = mysql_select_db($dbname);

//date_default_timezone_set('America/Manaus');
date_default_timezone_set('America/Manaus');
$dataHoraGlobal = date('Y/m/d H:i:s');