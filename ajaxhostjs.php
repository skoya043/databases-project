<?php
// Fetching Values From URL
$hostid = $_POST['id'];
$connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");


 if(isset($_POST['id']))
	{
	$record = $_POST["id"];
    $query = pg_query("SELECT * FROM host WHERE id='$record'");
	if(pg_num_rows($query) == 1){
	$result = pg_query($connection, "SELECT id, first_name FROM host where id='$record'");
	// while ($row = pg_fetch_row($result)){
	// 	echo "ID: $row[0] NAME: $row[1]";
	// 	echo "\n";
	// }
echo "Your results are shown below";
}else{
	echo "Not Found" ;
}
}

// if (isset($_POST['id'])) {
// 	$result = pg_query($connection, "SELECT id, first_name FROM host");
// echo "Your results are shown below";
// }
?>