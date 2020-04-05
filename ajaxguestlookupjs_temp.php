<?php

$connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");

$min_price = (float)$_POST["min1"];
$max_price = (float)$_POST["max1"];
$city = $_POST["city1"];
$province = $_POST["province1"];
$checkin = $_POST["checkin1"];
$checkout = $_POST["checkout1"];

$time1=strtotime($checkin2);
        $sday=date("d",$time1);
        $smonth=date("n",$time1);
        $syear=date("Y",$time1);

$time2=strtotime($checkout2);
        $eday=date("d",$time2);
        $emonth=date("n",$time2);
        $eyear=date("Y",$time2);


	$result = pg_query($connection, "SELECT * FROM property where id='$record'");
	while ($row = pg_fetch_row($result)){
		echo "ID: $row[0] NAME: $row[1]";
		echo "\n";
	}

echo "Your results are shown below";
}else{
	echo "Not Found" ;
}

?>