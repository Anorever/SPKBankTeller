<?php
include('config.php');
	$teller1_k1=$_POST['teller1_k1'];
	$teller1_k2=$_POST['teller1_k2'];
	$teller1_k3=$_POST['teller1_k3'];
	$teller1_k4=$_POST['teller1_k4'];
	$teller1_k5=$_POST['teller1_k5'];
	$teller1_k6=$_POST['teller1_k6'];

	$teller2_k1=$_POST['teller2_k1'];
	$teller2_k2=$_POST['teller2_k2'];
	$teller2_k3=$_POST['teller2_k3'];
	$teller2_k4=$_POST['teller2_k4'];
	$teller2_k5=$_POST['teller2_k5'];
	$teller2_k6=$_POST['teller2_k6'];

	$teller3_k1=$_POST['teller3_k1'];
	$teller3_k2=$_POST['teller3_k2'];
	$teller3_k3=$_POST['teller3_k3'];
	$teller3_k4=$_POST['teller3_k4'];
	$teller3_k5=$_POST['teller3_k5'];
	$teller3_k6=$_POST['teller3_k6'];
	if (isset($_POST['proses'])) {
	$query="insert into `data_input` (
				`teller1_k1`, 
				`teller1_k2`, 
				`teller1_k3`, 
				`teller1_k4`, 
				`teller1_k5`, 
				`teller1_k6`, 
				
				`teller2_k1`, 
				`teller2_k2`, 
				`teller2_k3`, 
				`teller2_k4`,
				`teller2_k5`, 
				`teller2_k6`, 
				
				`teller3_k1`, 
				`teller3_k2`, 
				`teller3_k3`, 
				`teller3_k4`, 
				`teller3_k5`, 
				`teller3_k6`)
	values (
				'$teller1_k1',
				'$teller1_k2',
				'$teller1_k3',
				'$teller1_k4',
				'$teller1_k5',
				'$teller1_k6',
				
				'$teller2_k1',
				'$teller2_k2',
				'$teller2_k3',
				'$teller2_k4',
				'$teller2_k5',
				'$teller2_k6',
				
				'$teller3_k1',
				'$teller3_k2',
				'$teller3_k3',
				'$teller3_k4',
				'$teller3_k5',
				'$teller3_k6'
				)";
				
	$hasil = mysql_query($query) or die('Query Error');}
	
?>