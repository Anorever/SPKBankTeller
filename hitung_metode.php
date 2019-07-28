<?php session_start();?>
<html>
  <head>
		<title>Simulasi SPK</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>

		<link rel="stylesheet" type="text/css" href="css/slicknav.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		
		
		<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>

		<script type="text/javascript" src="js/jquery.mobile.customized.min.js"></script>
		<script type="text/javascript" src="js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="js/camera.min.js"></script>
		<script type="text/javascript" src="js/myscript.js"></script>
		<script src="js/sorting.js" type="text/javascript"></script>
		<script src="js/jquery.isotope.js" type="text/javascript"></script>
		<!--script type="text/javascript" src="js/jquery.nav.js"></script-->
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


		<script>
			jQuery(function(){
					jQuery('#camera_wrap_1').camera({
					transPeriod: 500,
					time: 3000,
					height: '490px',
					thumbnails: false,
					pagination: true,
					playPause: false,
					loader: false,
					navigation: false,
					hover: false
				});
			});
		</script>
		
	</head>
	<body>


    
    <!--home start-->
    
    <div id="home">
    	<div class="headerLine">
	<div id="menuF" class="default">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="navmenu"style="text-align: right;">
						<ul id="menu">
							<li class="active" ><a href="index.php">Home</a></li>
							<li>
							<?php
							if(isset($_SESSION['login']))
							{?>
							<a href="logout.php">&nbsp; (Logout)</a>
							<?php } else { ?>
							<a href="login_form.php">ADMIN</a> <?php }?></li>
							<li class="last"><a href="info.html">INFO</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p align="center">
		<div class="container" align="center">
			<div class="row wrap" align="center">
				<div class="col-md-12 gallery" align="center"> 
						<div class="camera_wrap camera_white_skin" id="camera_wrap_1" align="center">
							<div data-thumb="" data-src="images/slides/blank.gif" align="center">
									<div class="img-responsive camera_caption fadeFromBottom">
									
									<h1># Project Simulasi Sistem Pendukung Keputusan #</h1>
									<h1><b> Pemilihan Pelayanan Teller Bank Terbaik </b></h1> <h1> Dengan Metode SAW dan TOPSIS </h1>
								</div>
							</div>
							
							<div data-thumb="" data-src="images/slides/blank.gif" align="center">
								<div class="img-responsive camera_caption fadeFromBottom" align="center">
									
									<h1>"Good Banking is produced not by good laws, but </h1> <h1><i> by good bankers." </i></h1>
									<h1> <b> Hartley Withers </b> </h1>
								</div>
							</div>
						</div>
				</div>
			</div>
		</div>
		</p>
	</div>
		</table>
		<br><br><br><br>
	<p align="center">
	<table>
	<tr><td align="center">
	<div class="heart" align="center"></div>
	</td></tr>
	<tr><td align="center"><br>
	<font face="centaur" size="4" color="#B0171F">Pelayanan Prima merupakan pelayanan terbaik yang harus 
	<br> dilakukan dan berikan kepada nasabah/pelanggan.</font>
	</td></tr>
	</table>
	</p>
	<br><br><br><br>
	
	<?php
   echo '
		<p align="center">
		<button type="button" class="btn btn-danger"><a href="index.php?page=data"><font  color="white"><h4>Back</h4></font></button> </a></p>';
		include 'config.php';
        include 'function.php';
		
		echo '
		<br><hr>
		<p align="center">
            <h3 align="center">Perhitungan Dengan Metode SPK-TOPSIS</h3>
            <h4 align="center">Jumlah Nilai Hasil survey di setiap kriteria</h4></p>
     <table border="1" align="center">
        <tr  bgcolor="#FFC125">
            <th rowspan="2" width="100"><p align="center">Nama Teller</p></th>
            <th colspan="6" width="100"><p align="center">Kriteria</p></th>
        </tr>
        <tr bgcolor="#FFC125">
		    <th align="center" width="100" > <p align="center">kriteria 1</p> </th>
            <th align="center" width="100"> <p align="center">kriteria 2</p> </th>
            <th align="center" width="100"> <p align="center">kriteria 3</p> </th>
            <th align="center" width="100"> <p align="center">kriteria 4</p> </th>
            <th align="center" width="100"> <p align="center">kriteria 5</p> </th>
            <th align="center" width="100"> <p align="center">kriteria 6</p> </th>
        </tr>
        <tr align="center">
            <td align="center">Teller 1</td>
            <td align="center">' . $sum1_1 . '</td>
            <td align="center">' . $sum1_2 . '</td>
            <td align="center">' . $sum1_3 . '</td>
            <td align="center">' . $sum1_4 . '</td>
            <td align="center">' . $sum1_5 . '</td>
            <td align="center">' . $sum1_6 . '</td>
        </tr>
        <tr align="center">
            <td align="center">Teller 2</td>
            <td align="center">' . $sum2_1 . '</td>
            <td align="center">' . $sum2_2 . '</td>
            <td align="center">' . $sum2_3 . '</td>
            <td align="center">' . $sum2_4 . '</td>
            <td align="center">' . $sum2_5 . '</td>
            <td align="center">' . $sum2_6 . '</td>
        </tr>
		<tr>
            <td align="center">Teller 3</td>
            <td align="center">' . $sum3_1 . '</td>
            <td align="center">' . $sum3_2 . '</td>
            <td align="center">' . $sum3_3 . '</td>
            <td align="center">' . $sum3_4 . '</td>
            <td align="center">' . $sum3_5 . '</td>
            <td align="center">' . $sum3_6 . '</td>
		</tr>
		</table><br/>
    <br/><br/>
	<hr>
   <p align="center">
   <table>
        <tr>
			<td rowspan="3"><img style="height:100px" src="kurungbuka.png"/></td>
            <td align="center" width="50">' . $sum1_1 . '</td>
            <td align="center" width="50">' . $sum1_2 . '</td>
            <td align="center" width="50">' . $sum1_3 . '</td>
            <td align="center" width="50">' . $sum1_4 . '</td>
            <td align="center" width="50">' . $sum1_5 . '</td>
            <td align="center" width="50">' . $sum1_6 . '</td>
  		<td rowspan="3"><img style="height:100px" src="kurungtutup.png"/></td>
        </tr>
        <tr>
            <td align="center">' . $sum2_1 . '</td>
            <td align="center">' . $sum2_2 . '</td>
            <td align="center">' . $sum2_3 . '</td>
            <td align="center">' . $sum2_4 . '</td>
            <td align="center">' . $sum2_5 . '</td>
            <td align="center">' . $sum2_6 . '</td>
  	</tr>
        <tr>
            <td align="center">' . $sum3_1 . '</td>
            <td align="center">' . $sum3_2 . '</td>
            <td align="center">' . $sum3_3 . '</td>
            <td align="center">' . $sum3_4 . '</td>
            <td align="center">' . $sum3_5 . '</td>
            <td align="center">' . $sum3_6 . '</td>
        </tr>
	
		
    </table><br/></p>
	<hr>
   <h4 align="center"><b>Matriks ternormalisasi, R</b></h4><br>
   <p align="center">
   <table class="tableMatrix">
    <tr>
      <td rowspan="3">R = </td>
      <td rowspan="3"><img style="height:100px" src="kurungbuka.png"/></td>
      <td style="padding-right:30px">' . $R11 . '</td>
      <td style="padding-right:30px">' . $R12 . '</td>
      <td style="padding-right:30px">' . $R13 . '</td>
      <td style="padding-right:30px">' . $R14 . '</td>
      <td style="padding-right:30px">' . $R15 . '</td>
	  <td style="padding-right:30px">' . $R15 . '</td>
	  <td rowspan="3"><img style="height:100px" src="kurungtutup.png"/></td>
    </tr>
    <tr>
      <td style="padding-right:30px">' . $R21 . '</td>
	  <td style="padding-right:30px">' . $R22 . '</td>
	  <td style="padding-right:30px">' . $R23 . '</td>
      <td style="padding-right:30px">' . $R24 . '</td>
	  <td style="padding-right:30px">' . $R25 . '</td>
	  <td style="padding-right:30px">' . $R26 . '</td>
	</tr>
    <tr>
      <td style="padding-right:30px">' . $R31 . '</td>
	  <td style="padding-right:30px">' . $R32 . '</td>
	  <td style="padding-right:30px">' . $R33 . '</td>
      <td style="padding-right:30px">' . $R34 . '</td>
	  <td style="padding-right:30px">' . $R35 . '</td>   
      <td style="padding-right:30px">' . $R36 . '</td>
	</tr>
   </table>
   </p>
   <hr>
	   <h4 align="center"><b>Normalisasi Matriks Terbobot Y</b></h4><br>
	   <p align="center">
   <table class="tableMatrix">
    <tr>
      <td rowspan="3">Y = </td>
      <td rowspan="3"><img style="height:100px" src="kurungbuka.png"/></td>
      <td style="padding-right:30px">' . $y11 . '</td>
      <td style="padding-right:30px">' . $y12 . '</td>
      <td style="padding-right:30px">' . $y13 . '</td>
      <td style="padding-right:30px">' . $y14 . '</td>
      <td style="padding-right:30px">' . $y15 . '</td>
	  <td style="padding-right:30px">' . $y15 . '</td>
	  <td rowspan="3"><img style="height:100px" src="kurungtutup.png"/></td>
    </tr>
    <tr>
      <td style="padding-right:30px">' . $y21 . '</td>
	  <td style="padding-right:30px">' . $y22 . '</td>
	  <td style="padding-right:30px">' . $y23 . '</td>
      <td style="padding-right:30px">' . $y24 . '</td>
	  <td style="padding-right:30px">' . $y25 . '</td>
	  <td style="padding-right:30px">' . $y26 . '</td>
	</tr>
    <tr>
      <td style="padding-right:30px">' . $y31 . '</td>
	  <td style="padding-right:30px">' . $y32 . '</td>
	  <td style="padding-right:30px">' . $y33 . '</td>
      <td style="padding-right:30px">' . $y34 . '</td>
	  <td style="padding-right:30px">' . $y35 . '</td>   
      <td style="padding-right:30px">' . $y36 . '</td>
	</tr>
   </table></p>
   <hr>
   <h4 align="center"><b>Solusi Ideal Positif (A<sup>+</sup>):</b></h4>
   <p align="center">
   <table><tr><td>
   y<sub>1</sub><sup>+</sup> = max{' . $y11 . ';&nbsp; ' . $y21 . '; &nbsp;' . $y31 . '}= &nbsp; ' . $y1 . '<br/>
   y<sub>2</sub><sup>+</sup> = max{' . $y12 . ';&nbsp; ' . $y22 . '; &nbsp;' . $y32 . '}= &nbsp; ' . $y2 . '<br/>
   y<sub>3</sub><sup>+</sup> = max{' . $y13 . ';&nbsp; ' . $y23 . '; &nbsp;' . $y33 . '}= &nbsp; ' . $y3 . '<br/>
   y<sub>4</sub><sup>+</sup> = max{' . $y14 . ';&nbsp; ' . $y24 . '; &nbsp;' . $y34 . '}= &nbsp; ' . $y4 . '<br/>
   y<sub>5</sub><sup>+</sup> = max{' . $y15 . ';&nbsp; ' . $y25 . '; &nbsp;' . $y35 . '}= &nbsp; ' . $y5 . '<br/>
   y<sub>6</sub><sup>+</sup> = max{' . $y16 . ';&nbsp; ' . $y26 . '; &nbsp;' . $y36 . '}= &nbsp; ' . $y6 . '<br/>
   <br/>
   A<sup>+</sup> = {' . $y1 . ';&nbsp; ' . $y2 . ';&nbsp; ' . $y3 . ';&nbsp; ' . $y4 . ';&nbsp; ' . $y5 . ';&nbsp;' . $y6 . '; }<br/>
    </td></tr></table>
	</p>
   <hr>
   <h4 align="center"><b>Solusi Ideal Negatif (A<sup>-</sup>):</b></h4>
   <p align="center">
   <table><tr><td>
   y<sub>1</sub><sup>+</sup> = min{' . $y11 . ';&nbsp; ' . $y21 . ';&nbsp; ' . $y31 . '}= &nbsp; ' . $y1 . '<br/>
   y<sub>2</sub><sup>+</sup> = min{' . $y12 . ';&nbsp; ' . $y22 . ';&nbsp; ' . $y32 . '}= &nbsp; ' . $y2 . '<br/>
   y<sub>3</sub><sup>+</sup> = min{' . $y13 . ';&nbsp; ' . $y23 . ';&nbsp; ' . $y33 . '}= &nbsp; ' . $y3 . '<br/>
   y<sub>4</sub><sup>+</sup> = min{' . $y14 . ';&nbsp; ' . $y24 . ';&nbsp; ' . $y34 . '}= &nbsp; ' . $y4 . '<br/>
   y<sub>5</sub><sup>+</sup> = min{' . $y15 . ';&nbsp; ' . $y25 . ';&nbsp; ' . $y35 . '}= &nbsp; ' . $y5 . '<br/>
   y<sub>6</sub><sup>+</sup> = min{' . $y16 . ';&nbsp; ' . $y26 . ';&nbsp; ' . $y36 . '}= &nbsp; ' . $y6 . '<br/>
   <br/>
   </td></tr></table>
   A<sup>-</sup> = {' . $y1m . ';&nbsp; ' . $y2m . ';&nbsp; ' . $y3m . ';&nbsp; ' . $y4m . ';&nbsp; ' . $y5m . ';&nbsp; ' . $y6m . '}<br/>
   </p>
   <hr>
   <h4 align="center"><b>Jarak antara nilai terbobot setiap alternatif terhadap solusi ideal positif, S<sub>i<sup>+</sup></sub></b></h4>
   <p align="center">    
   <table><tr><td>   
   D<sub>1<sup>+</sup></sub> = ' . $d1 . '<br/>
   D<sub>2<sup>+</sup></sub> = ' . $d2 . '<br/>
   D<sub>3<sup>+</sup></sub> = ' . $d3 . '<br/>
   </td></tr></table>
   </p>
   <hr>
   <h4 align="center"><b>Jarak antara nilai terbobot setiap alternatif terhadap solusi ideal negatif, S<sub>i<sup>-</sup></sub></b></h4>
   <p align="center">
   <table><tr><td>  
   D<sub>1<sup>-</sup></sub> = ' . $d1m . '<br/>
   D<sub>2<sup>-</sup></sub> = ' . $d2m . '<br/>
   D<sub>3<sup>-</sup></sub> = ' . $d3m . '<br/>
   </td></tr></table>
   </p>
	<hr>
   <h4 align="center"><b>Menentukan Nilai preferensi untuk setiap alternatif</b></h4>
   <p align="center">
   <table>
    <tr>
      <td rowspan="3">V<sub>1</sub></td>
      <td rowspan="3">=</td>
      <td align="center">' . $d1m . '</td>
      <td rowspan="3">=</td>
      <td align="center" rowspan="3">' . $d1m / ($d1 + $d1m) . '</td>
    </tr>
    <tr>
      <td style="padding:0"><hr/></td>
    </tr>
    <tr>
      <td align="center">' . $d1 . '+' . $d1m . '</td>
    </tr>
   </table>
   <br/>
   <table>
   </p>
    <tr>
      <td rowspan="3">V<sub>2</sub></td>
      <td rowspan="3">=</td>
      <td align="center">' . $d2m . '</td>
      <td rowspan="3">=</td>
      <td align="center" rowspan="3">' . $d2m / ($d2 + $d2m) . '</td>
    </tr>
    <tr>
      <td style="padding:0"><hr/></td>
    </tr>
    <tr>
      <td align="center">' . $d2 . '+' . $d2m . '</td>
    </tr>
   </table>
   <br/>
   <table>
    <tr>
      <td rowspan="3">V<sub>3</sub></td>
      <td rowspan="3">=</td>
      <td align="center">' . $d3m . '</td>
      <td rowspan="3">=</td>
      <td align="center" rowspan="3">' . $d3m / ($d3 + $d3m) . '</td>
    </tr>
    <tr>
      <td style="padding:0"><hr/></td>
    </tr>
    <tr>
      <td align="center">' . $d3 . '+' . $d3m . '</td>
    </tr>
   </table>
   </p>
   <hr>
   <h3 align="center"><b>Teller yang Terbaik : <font color="red">Teller ' . $alternatif . '</font> <br>dengan Hasil= ' . $hasil . '</b></h3>
	<hr>
	<br><br><br><br>';
 
?>
</body>
</html>