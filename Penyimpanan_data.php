<?php
if (empty($_GET['hasil']) && empty($_GET['hapus'])) {
    ?>
	<p align="center">
    <button type="button" class="btn btn-danger"><a href="index.php">
	<font  color="white"><h4>Menu Utama</h4></font></a></button></p>
	<br><br><br>
	<p align="center">
	<table border="1" class="Tabeldata">
		<tr bgcolor="#FFC125">
		<th rowspan="2"><p align="center">&nbsp; No &nbsp;</p></th>
		<th colspan="6"> <p align="center">&nbsp; Teller 1 &nbsp;</p></th>
		<th colspan="6"> <p align="center">&nbsp; Teller 2 &nbsp;</p> </th>
		<th colspan="6"> <p align="center">&nbsp; Teller 3 &nbsp;</p> </th>
		<th rowspan="2"><p align="center">&nbsp; Hapus &nbsp;</p></th>
		</tr>
        <tr bgcolor="#FFC125">
            <th><p align="center">&nbsp; Kriteria 1 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 2 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 3 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 4 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 5 &nbsp;</p></th>
			<th><p align="center">&nbsp; Kriteria 6 &nbsp;</p></th>
			
            <th><p align="center">&nbsp; Kriteria 1 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 2 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 3 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 4 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 5 &nbsp;</p></th>
			<th><p align="center">&nbsp; Kriteria 6 &nbsp;</p></th>
			
            <th><p align="center">&nbsp; Kriteria 1 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 2 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 3 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 4 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 5 &nbsp;</p></th>
			<th><p align="center">&nbsp; Kriteria 6 &nbsp;</p></th>
        </tr>

        <?php
        $no = 1;
		$query2="select * from data_input";
        $queryData = mysqli_query($conn,$query2);
        while ($data_simpan = mysqli_fetch_array($queryData)) {
            echo '
    <tr>
        <td align="center">' . $no . '</td>
            
			
        
        <td align="center">' . $data_simpan['teller1_k1'] . '</td>
        <td align="center">' . $data_simpan['teller1_k2'] . '</td>
        <td align="center">' . $data_simpan['teller1_k3'] . '</td>
        <td align="center">' . $data_simpan['teller1_k4'] . '</td>
        <td align="center">' . $data_simpan['teller1_k5'] . '</td>
		<td align="center">' . $data_simpan['teller1_k6'] . '</td>
            
        <td align="center">' . $data_simpan['teller2_k1'] . '</td>
        <td align="center">' . $data_simpan['teller2_k2'] . '</td>
        <td align="center">' . $data_simpan['teller2_k3'] . '</td>
        <td align="center">' . $data_simpan['teller2_k4'] . '</td>
        <td align="center">' . $data_simpan['teller2_k5'] . '</td>
		<td align="center">' . $data_simpan['teller2_k6'] . '</td>

		<td align="center">' . $data_simpan['teller3_k1'] . '</td>
        <td align="center">' . $data_simpan['teller3_k2'] . '</td>
        <td align="center">' . $data_simpan['teller3_k3'] . '</td>
        <td align="center">' . $data_simpan['teller3_k4'] . '</td>
        <td align="center">' . $data_simpan['teller3_k5'] . '</td>
		<td align="center">' . $data_simpan['teller3_k6'] . '</td>
		
		<td align="center"><p align="center"><a onclick="return confirm(\'Hapus ?\')" style="color:red" href="index.php?page=data&hapus=' . $data_simpan['ID'] . '">&nbsp;&nbsp;<img src="delete.png"></div></a></small><br></p></td>

   </tr>
            ';
            $no++;
        }
		
        ?>
	
	<h1>Hasil Jumlah dari Input Survei dan Pemilihan
	<br> teller terbaik berdasarkan metode SAW-TOPSIS</h1>
    <br><br>
	</table>
	</p>
		<br><br><br>
	<p align="center">
	<table border="1" class="Tabeldata">
		<tr bgcolor="#FFC125">
		<th colspan="20"> <p align="center">&nbsp; Jumlah Setiap Kriteria hasil Input dari Survei &nbsp;</p></th>
		<tr bgcolor="#FFC125">
		<th colspan="6"> <p align="center">&nbsp; Teller 1 &nbsp;</p></th>
		<th colspan="6"> <p align="center">&nbsp; Teller 2 &nbsp;</p> </th>
		<th colspan="6"> <p align="center">&nbsp; Teller 3 &nbsp;</p> </th>
		<th rowspan="2"><p align="center">&nbsp; SPK &nbsp;</p></th>
		</tr>
        <tr bgcolor="#FFC125">
            <th><p align="center">&nbsp; Kriteria 1 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 2 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 3 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 4 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 5 &nbsp;</p></th>
			<th><p align="center">&nbsp; Kriteria 6 &nbsp;</p></th>
			
            <th><p align="center">&nbsp; Kriteria 1 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 2 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 3 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 4 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 5 &nbsp;</p></th>
			<th><p align="center">&nbsp; Kriteria 6 &nbsp;</p></th>
			
            <th><p align="center">&nbsp; Kriteria 1 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 2 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 3 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 4 &nbsp;</p></th>
            <th><p align="center">&nbsp; Kriteria 5 &nbsp;</p></th>
			<th><p align="center">&nbsp; Kriteria 6 &nbsp;</p></th>
        </tr>

        <?php
				/*teller 1*/
      	$queryt1_k1="select sum(teller1_k1) as t1_k1 from data_input";
        $queryDatat1_k1 = mysqli_query($conn,$queryt1_k1);
		$rowt1_k1 = mysqli_fetch_assoc($queryDatat1_k1); 
		$sum1_1 = $rowt1_k1['t1_k1'];
		
		$queryt1_k2="select sum(teller1_k2) as t1_k2 from data_input";
        $queryDatat1_k2 = mysqli_query($conn,$queryt1_k2);
		$rowt1_k2 = mysqli_fetch_assoc($queryDatat1_k2); 
		$sum1_2 = $rowt1_k2['t1_k2'];
	
		$queryt1_k3="select sum(teller1_k3) as t1_k3 from data_input";
        $queryDatat1_k3 = mysqli_query($conn,$queryt1_k3);
		$rowt1_k3 = mysqli_fetch_assoc($queryDatat1_k3); 
		$sum1_3 = $rowt1_k3['t1_k3'];
		
		$queryt1_k4="select sum(teller1_k4) as t1_k4 from data_input";
        $queryDatat1_k4 = mysqli_query($conn,$queryt1_k4);
		$rowt1_k4 = mysqli_fetch_assoc($queryDatat1_k4); 
		$sum1_4 = $rowt1_k4['t1_k4'];
		
		$queryt1_k5="select sum(teller1_k5) as t1_k5 from data_input";
        $queryDatat1_k5 = mysqli_query($conn,$queryt1_k5);
		$rowt1_k5 = mysqli_fetch_assoc($queryDatat1_k5); 
		$sum1_5 = $rowt1_k5['t1_k5'];

		$queryt1_k6="select sum(teller1_k5) as t1_k6 from data_input";
        $queryDatat1_k6 = mysqli_query($conn,$queryt1_k6);
		$rowt1_k6 = mysqli_fetch_assoc($queryDatat1_k6); 
		$sum1_6 = $rowt1_k6['t1_k6'];

		
		/*teller 2*/
      	$queryt2_k1="select sum(teller2_k1) as t2_k1 from data_input";
        $queryDatat2_k1 = mysqli_query($conn,$queryt2_k1);
		$rowt2_k1 = mysqli_fetch_assoc($queryDatat2_k1); 
		$sum2_1 = $rowt2_k1['t2_k1'];
		
		$queryt2_k2="select sum(teller1_k2) as t2_k2 from data_input";
        $queryDatat2_k2 = mysqli_query($conn,$queryt2_k2);
		$rowt2_k2 = mysqli_fetch_assoc($queryDatat2_k2); 
		$sum2_2 = $rowt2_k2['t2_k2'];
	
		$queryt2_k3="select sum(teller1_k3) as t2_k3 from data_input";
        $queryDatat2_k3 = mysqli_query($conn,$queryt2_k3);
		$rowt2_k3 = mysqli_fetch_assoc($queryDatat2_k3); 
		$sum2_3 = $rowt2_k3['t2_k3'];
		
		$queryt2_k4="select sum(teller2_k4) as t2_k4 from data_input";
        $queryDatat2_k4 = mysqli_query($conn,$queryt2_k4);
		$rowt2_k4 = mysqli_fetch_assoc($queryDatat2_k4); 
		$sum2_4 = $rowt2_k4['t2_k4'];
		
		$queryt2_k5="select sum(teller2_k5) as t2_k5 from data_input";
        $queryDatat2_k5 = mysqli_query($conn,$queryt2_k5);
		$rowt2_k5 = mysqli_fetch_assoc($queryDatat2_k5); 
		$sum2_5 = $rowt2_k5['t2_k5'];

		$queryt2_k6="select sum(teller2_k5) as t2_k6 from data_input";
        $queryDatat2_k6 = mysqli_query($conn,$queryt2_k6);
		$rowt2_k6 = mysqli_fetch_assoc($queryDatat2_k6); 
		$sum2_6 = $rowt2_k6['t2_k6'];

		
		/*teller 3*/
      	$queryt3_k1="select sum(teller3_k1) as t3_k1 from data_input";
        $queryDatat3_k1 = mysqli_query($conn,$queryt3_k1);
		$rowt3_k1 = mysqli_fetch_assoc($queryDatat3_k1); 
		$sum3_1 = $rowt3_k1['t3_k1'];
		
		$queryt3_k2="select sum(teller3_k2) as t3_k2 from data_input";
        $queryDatat3_k2 = mysqli_query($conn,$queryt3_k2);
		$rowt3_k2 = mysqli_fetch_assoc($queryDatat3_k2); 
		$sum3_2 = $rowt3_k2['t3_k2'];
	
		$queryt3_k3="select sum(teller3_k3) as t3_k3 from data_input";
        $queryDatat3_k3 = mysqli_query($conn,$queryt3_k3);
		$rowt3_k3 = mysqli_fetch_assoc($queryDatat3_k3); 
		$sum3_3 = $rowt3_k3['t3_k3'];
		
		$queryt3_k4="select sum(teller3_k4) as t3_k4 from data_input";
        $queryDatat3_k4 = mysqli_query($conn,$queryt3_k4);
		$rowt3_k4 = mysqli_fetch_assoc($queryDatat3_k4); 
		$sum3_4 = $rowt3_k4['t3_k4'];
		
		$queryt3_k5="select sum(teller3_k5) as t3_k5 from data_input";
        $queryDatat3_k5 = mysqli_query($conn,$queryt3_k5);
		$rowt3_k5 = mysqli_fetch_assoc($queryDatat3_k5); 
		$sum3_5 = $rowt3_k5['t3_k5'];

		$queryt3_k6="select sum(teller3_k5) as t3_k6 from data_input";
        $queryDatat3_k6 = mysqli_query($conn,$queryt3_k6);
		$rowt3_k6 = mysqli_fetch_assoc($queryDatat3_k6); 
		$sum3_6 = $rowt3_k6['t3_k6'];

		echo '
    <tr>
			<td align="center">' . $sum1_1 . '</td>
            <td align="center">' . $sum1_2 . '</td>
            <td align="center">' . $sum1_3 . '</td>
            <td align="center">' . $sum1_4 . '</td>
            <td align="center">' . $sum1_5 . '</td>
            <td align="center">' . $sum1_6 . '</td>
            
			<td align="center">' . $sum2_1 . '</td>
            <td align="center">' . $sum2_2 . '</td>
            <td align="center">' . $sum2_3 . '</td>
            <td align="center">' . $sum2_4 . '</td>
            <td align="center">' . $sum2_5 . '</td>
            <td align="center">' . $sum2_6 . '</td>

			<td align="center">' . $sum3_1 . '</td>
            <td align="center">' . $sum3_2 . '</td>
            <td align="center">' . $sum3_3 . '</td>
            <td align="center">' . $sum3_4 . '</td>
            <td align="center">' . $sum3_5 . '</td>
            <td align="center">' . $sum3_6 . '</td>
		
			
		<td align="center"><a href="hitung_metode.php"><br><small>Langkah metode</a> </p></td>
		';?>
   </tr>
    </table>
	</p>
	
	
<?php
}  else if (!empty($_GET['hapus'])) {
        mysqli_query($conn,"delete from data_input where ID=$_GET[hapus]");
        echo '<script>alert("Berhasil di Hapus")</script>';
        echo '<meta HTTP-EQUIV="REFRESH" content="0; url=index.php?page=data">';
    }
?>
<br/>