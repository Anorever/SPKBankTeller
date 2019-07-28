<html>
	<head></head>
	<body>
	<?php if(isset($_SESSION['login']))
	{
		echo'
				<p align="center">
				<button type="button" class="btn btn-success"><a href="index.php?page=data">
				<font  color="white"><h4>Lihat Data</h4></font></a></button></p>';
	}?>
	<br><br><br>
	<hr>
	<p align="center">
	<h1 align="center">- Survei Kinerja Teller bank -</h1>
	</p>
	<hr>
	<br><br><br>
	<p align="center"><font size="5"><b>Teller 1</font></p>
	<form method="post">
	<p align="center">
	<table border="1" align="center">
	<tr align="center">
	<td width="500" colspan="2"><br>Kemampuan (Ability)<br><br></td>
	</tr>
	<tr>
	<td align="center">
	<br>Kemampuan Teller dalam menghadapi nasabah <br>
	(Komunikasi, Kecepatan dan Ketepatan)<br><br>
	</td>
	<td align="center">
	<select name="teller1_k1">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Sikap (Attitude)<br><br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Sikap dan perilaku teller dalam memberikan pelayanan <br>
	pada nasabah<br><br>
	</td>
	<td>
	<select name="teller1_k2">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Penampilan (Apprearance)<br><br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Penampilan fisik ataupun non-fisik (sopan, rapi dan bersih)<br><br> 
	</td>
	<td>
	<select name="teller1_k3">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Perhatian (Attention)<br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Kepedulian penuh terhadap Nasabah, yang berkaitan dengan 
	<br>kebutuhan dan keinginan Nasabah, maupun memahami saran 
	<br>dan kritiknya<br><br>
	</td>
	<td>
	<select name="teller1_k4">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Tindakan (Action)<br><br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Kegiatan nyata yang dilakukan dalam memberikan pelayanan 
	<br>kepada Nasabah<br><br>
	</td>
	<td>
	<select name="teller1_k5">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Tanggung jawab (Accountability)<br><br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Sikap keberpihakan kepada pelanggan sebagai bentuk kepedulian,
	<br>untuk meminimalkan ketidakpuasan Nasabah<br><br>
	</td>
	<td>
	<select name="teller1_k6">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	</table>
	
		<br><br><br>
	<p align="center"><font size="5"><b>Teller 2</font></p>
	
	<p align="center">
	<table border="1" align="center">
	<tr align="center">
	<td width="500" colspan="2"><br>Kemampuan (Ability)<br><br></td>
	</tr>
	<tr>
	<td align="center">
	<br>Kemampuan Teller dalam menghadapi nasabah <br>
	(Komunikasi, Kecepatan dan Ketepatan)<br><br>
	</td>
	<td align="center">
	<select name="teller2_k1">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Sikap (Attitude)<br><br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Sikap dan perilaku teller dalam memberikan pelayanan <br>
	pada nasabah<br><br>
	</td>
	<td>
	<select name="teller2_k2">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Penampilan (Apprearance)<br><br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Penampilan fisik ataupun non-fisik (sopan, rapi dan bersih)<br><br> 
	</td>
	<td>
	<select name="teller2_k3">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Perhatian (Attention)<br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Kepedulian penuh terhadap Nasabah, yang berkaitan dengan 
	<br>kebutuhan dan keinginan Nasabah, maupun memahami saran 
	<br>dan kritiknya<br><br>
	</td>
	<td>
	<select name="teller2_k4">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Tindakan (Action)<br><br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Kegiatan nyata yang dilakukan dalam memberikan pelayanan 
	<br>kepada Nasabah<br><br>
	</td>
	<td>
	<select name="teller2_k5">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Tanggung jawab (Accountability)<br><br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Sikap keberpihakan kepada pelanggan sebagai bentuk kepedulian,
	<br>untuk meminimalkan ketidakpuasan Nasabah<br><br>
	</td>
	<td>
	<select name="teller2_k6">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	</table>
	
		<br><br><br>
	<p align="center"><font size="5"><b>Teller 3</font></p>
	
	<p align="center">
	<table border="1" align="center">
	<tr align="center">
	<td width="500" colspan="2"><br>Kemampuan (Ability)<br><br></td>
	</tr>
	<tr>
	<td align="center">
	<br>Kemampuan Teller dalam menghadapi nasabah <br>
	(Komunikasi, Kecepatan dan Ketepatan)<br><br>
	</td>
	<td align="center">
	<select name="teller3_k1">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Sikap (Attitude)<br><br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Sikap dan perilaku teller dalam memberikan pelayanan <br>
	pada nasabah<br><br>
	</td>
	<td>
	<select name="teller3_k2">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Penampilan (Apprearance)<br><br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Penampilan fisik ataupun non-fisik (sopan, rapi dan bersih)<br><br> 
	</td>
	<td>
	<select name="teller3_k3">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Perhatian (Attention)<br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Kepedulian penuh terhadap Nasabah, yang berkaitan dengan 
	<br>kebutuhan dan keinginan Nasabah, maupun memahami saran 
	<br>dan kritiknya<br><br>
	</td>
	<td>
	<select name="teller3_k4">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Tindakan (Action)<br><br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Kegiatan nyata yang dilakukan dalam memberikan pelayanan 
	<br>kepada Nasabah<br><br>
	</td>
	<td>
	<select name="teller3_k5">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	<tr align="center">
	<td width="500" colspan="2"><br>Tanggung jawab (Accountability)<br><br></td>
	</tr>
	<tr align="center">
	<td>
	<br>Sikap keberpihakan kepada pelanggan sebagai bentuk kepedulian,
	<br>untuk meminimalkan ketidakpuasan Nasabah<br><br>
	</td>
	<td>
	<select name="teller3_k6">
    <option value="5">Sangat Baik
    <option value="4">Baik
    <option value="3">Cukup Baik
    <option value="2">Kurang Baik
    <option value="1">Tidak Baik
	</select></td>
	</tr>
	</table>
	<br><br>
	<center><input name="proses" class="btn btn-success" style="width: 200px;height: 70px;font-size: 20pt" type="submit" value="Selesai"/></center>
	</font>
	</form>
	
	<?php
	
	if (isset($_POST['proses'])) {
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
				
	$hasil = mysqli_query($conn,$query) or die('Query Error');
	echo '<script>alert("Terima Kasih sudah mengisi survey!")</script>';
    echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index.php">';
}
?>
	</body>
</html>