<!DOCTYPE html>
<html>
<body>
<head>
	 <link href="./style.css" type="text/css" rel="stylesheet">
</head>	

<div>
  <p><a href="./index.html"> Home</a></p>
</div>

<?php
	
	$connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com port=5432
		dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");
	$stat = pg_connection_status($connection);

	if($stat == PGSQL_CONNECTION_OK){
		echo 'Successful connection';
		echo "<br /> \n";
		echo "<br /> \n";
	} else {
		echo 'Error connecting';
	}
?>
<h2 class='titlecenter'>Database Administrator</h2>

<div class="login-page">
     <p style="margin-top: -75px;" class="headingcenter"> Your Queries </p>
    <textarea class="query" rows="10" cols="80"></textarea>
   <button class="querybutton">Submit</button>
  </div>

  <section> 
    <h2 class="headingcenter">Results</h2>
</section>

</body>

<?php 
	
    //change to accepting query input from user
	$result = pg_query($connection, "SELECT id, first_name FROM host");
	if (!$result){
		echo 'error\n';
		exit;
	}
?> 

<table align=center>
  <colgroup>
    <col span="5">

  </colgroup>
  <tr>
    <th><p align=center>ID</p></th>
    <th><p align=center>NAME</p></th>
  </tr>

  </tr>
<?php
    while ($row = pg_fetch_row($result)){
    echo "<tr>";
    echo "<td> <p align=center>$row[0] </p></td>";
    echo "<td> <p align=center>$row[1] </p></td>";
    echo "</tr>";
  }
?>

</html>
