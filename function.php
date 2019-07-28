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

		
//start rumus cari matriks ternomalisasi R
$R11 = $sum1_1/ max($sum1_1,$sum2_1,$sum3_1);
$R21 = $sum2_1/ max($sum1_1,$sum2_1,$sum3_1);
$R31 = $sum3_1/ max($sum1_1,$sum2_1,$sum3_1);

$R12 = $sum1_2/ max($sum1_2,$sum2_2,$sum3_2);
$R22 = $sum2_2/ max($sum1_2,$sum2_2,$sum3_2);
$R32 = $sum3_2/ max($sum1_2,$sum2_2,$sum3_2);

$R13 = $sum1_3/ max($sum1_3,$sum2_3,$sum3_3);
$R23 = $sum2_3/ max($sum1_3,$sum2_3,$sum3_3);
$R33 = $sum3_3/ max($sum1_3,$sum2_3,$sum3_3);

$R14 = $sum1_4/ max($sum1_4,$sum2_4,$sum3_4);
$R24 = $sum2_4/ max($sum1_4,$sum2_4,$sum3_4);
$R34 = $sum3_4/ max($sum1_4,$sum2_4,$sum3_4);

$R15 = $sum1_5/ max($sum1_5,$sum2_5,$sum3_5);
$R25 = $sum2_5/ max($sum1_5,$sum2_5,$sum3_5);
$R35 = $sum3_5/ max($sum1_5,$sum2_5,$sum3_5);

$R16 = $sum1_6/ max($sum1_6,$sum2_6,$sum3_6);
$R26 = $sum2_6/ max($sum1_6,$sum2_6,$sum3_6);
$R36 = $sum3_6/ max($sum1_6,$sum2_6,$sum3_6);

$y11 = 0.25 * $R11;
$y12 = 0.15 * $R12;
$y13 = 0.10 * $R13;
$y14 = 0.15 * $R14;
$y15 = 0.20 * $R15;
$y16 = 0.20 * $R16;

$y21 = 0.25 * $R21;
$y22 = 0.15 * $R22;
$y23 = 0.10 * $R23;
$y24 = 0.15 * $R24;
$y25 = 0.20 * $R25;
$y26 = 0.20 * $R26;

$y31 = 0.25 * $R31;
$y32 = 0.15 * $R32;
$y33 = 0.10 * $R33;
$y34 = 0.15 * $R34;
$y35 = 0.20 * $R35;
$y36 = 0.20 * $R36;


$y1 = max($y11, $y21, $y31);
$y2 = max($y12, $y22, $y32);
$y3 = max($y13, $y23, $y33);
$y4 = max($y14, $y24, $y34);
$y5 = max($y15, $y25, $y35);
$y6 = max($y16, $y26, $y36);

$y1m = min($y11, $y21, $y31);
$y2m = min($y12, $y22, $y32);
$y3m = min($y13, $y23, $y33);
$y4m = min($y14, $y24, $y34);
$y5m = min($y15, $y25, $y35);
$y6m = min($y16, $y26, $y36);

//untuk D+
$yy11=(($y11-$y1)*($y11-$y1));
$yy12=(($y12-$y2)*($y12-$y2));
$yy13=(($y13-$y3)*($y13-$y3));
$yy14=(($y14-$y4)*($y14-$y4));
$yy15=(($y15-$y5)*($y15-$y5));
$yy16=(($y16-$y6)*($y16-$y6));

$yy21=(($y21-$y1)*($y21-$y1));
$yy22=(($y22-$y2)*($y22-$y2));
$yy23=(($y23-$y3)*($y23-$y3));
$yy24=(($y24-$y4)*($y24-$y4));
$yy25=(($y25-$y5)*($y25-$y5));
$yy26=(($y26-$y6)*($y26-$y6));

$yy31=(($y31-$y1)*($y31-$y1));
$yy32=(($y32-$y2)*($y32-$y2));
$yy33=(($y33-$y3)*($y33-$y3));
$yy34=(($y34-$y4)*($y34-$y4));
$yy35=(($y35-$y5)*($y35-$y5));
$yy36=(($y36-$y6)*($y36-$y6));

//untuk D-
$yy11m=(($y11-$y1m)*($y11-$y1m));
$yy12m=(($y12-$y2m)*($y12-$y2m));
$yy13m=(($y13-$y3m)*($y13-$y3m));
$yy14m=(($y14-$y4m)*($y14-$y4m));
$yy15m=(($y15-$y5m)*($y15-$y5m));
$yy16m=(($y16-$y6m)*($y16-$y6m));

$yy21m=(($y21-$y1m)*($y21-$y1m));
$yy22m=(($y22-$y2m)*($y22-$y2m));
$yy23m=(($y23-$y3m)*($y23-$y3m));
$yy24m=(($y24-$y4m)*($y24-$y4m));
$yy25m=(($y25-$y5m)*($y25-$y5m));
$yy26m=(($y26-$y6m)*($y26-$y6m));

$yy31m=(($y31-$y1m)*($y31-$y1m));
$yy32m=(($y32-$y2m)*($y32-$y2m));
$yy33m=(($y33-$y3m)*($y33-$y3m));
$yy34m=(($y34-$y4m)*($y34-$y4m));
$yy35m=(($y35-$y5m)*($y35-$y5m));
$yy36m=(($y36-$y6m)*($y36-$y6m));

//fungsi D
$d1 = sqrt($yy11+$yy12+$yy13+$yy14+$yy15+$yy16);
$d2 = sqrt($yy21+$yy22+$yy23+$yy24+$yy25+$yy26);
$d3 = sqrt($yy31+$yy32+$yy33+$yy34+$yy35+$yy36);

$d1m = sqrt($yy11m+$yy12m+$yy13m+$yy14m+$yy15m+$yy16m);
$d2m = sqrt($yy21m+$yy22m+$yy23m+$yy24m+$yy25m+$yy26m);
$d3m = sqrt($yy31m+$yy32m+$yy33m+$yy34m+$yy35m+$yy36m);

        //start fungsi hasil
$v1 = $d1m / ($d1 + $d1m);
$v2 = $d2m / ($d2 + $d2m);
$v3 = $d3m / ($d3 + $d3m);
if ($v1 > $v2 && $v1 > $v3) {
    $hasil = $v1;
    $alternatif = "1";
} else if ($v2 > $v1 && $v2 > $v3) {
    $hasil = $v2;
    $alternatif = "2";
} else if ($v3 > $v1 && $v3 > $v2) {
    $hasil = $v3;
    $alternatif = "3";
}
//end   fungsi hasil
?>



