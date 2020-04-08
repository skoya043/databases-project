<?php

$min_price = (float)$_POST['min'];
$max_price = (float)$_POST['max'];
$city = $_POST['city'];
$province = $_POST['province'];
$country = $_POST['country'];

$connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");
	$checkin = $_POST['checkin'];
	$checkout = $_POST['checkout'];

	$time1=strtotime($checkin);
	        $sday=date('d',$time1);
	        $smonth=date('n',$time1);
	        $syear=date('Y',$time1);

	$time2=strtotime($checkout);
	        $eday=date('d',$time2);
	        $emonth=date('n',$time2);
	        $eyear=date('Y',$time2);

if(isset($_POST['min'])){ 
	echo "Your results are shown below";
}else{
	echo "Not Found" ;
}

?>