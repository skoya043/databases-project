<?php 
  $connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");
  $stat = pg_connection_status($connection);

  if($stat === PGSQL_CONNECTION_OK){
    echo 'connected';
  } else {
    echo 'error connecting';
  }

  
  ?>
  <!DOCTYPE html>
<html>
<body>
<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	 <link href="./style.css" type="text/css" rel="stylesheet">
   <script src="script.js"></script>
</head>	

<div>
  <p><a href="./index.html"> Home</a></p>
</div>

<h2 class='titlecenter'>Host</h2>

  <div id ="form" class="form">
      <p class="messageemp">Enter your Host ID to see the list of properties owned by you</p>
      <div class="ajax">
    <form id="login-form" class="login-form">
      <input id='id' type="text" placeholder="ID"/>
      <input id="submit" onclick="host()" type="button" value="Confirm">
      <p class="message">New Properties? <a href="./property.php">Create a property</a></p>
          </form>
        </div>
  </div>
</div>

<section> 
    <h2 class="headingcenter">(Display this section after id is entered)Properties owned by you:</h2>
</section>
	
<?php

  //change to host.id = (user's inputted id) and property.host_id = (user's inputted id)
  $result = pg_query($connection, "SELECT host.id, host.first_name, property.id, property.host_price, property.property_type, property.country FROM host inner join property on host.id = 3000 and property.host_id = 3000");
  
  if (!$result){
    echo 'error\n';
    exit;
  }
?>

  <table align=center>
  <table cellspacing="60">
  <colgroup>
    <col span="5">

  </colgroup>
  <tr>
    <th><p align=center></p></th>
    <th><p align=center></p></th>
    <th><p align=center></p></th>
    <th><p align=center></p></th>
    <th><p align=center></p></th>
    <th><p align=center>ID</p></th>
    <th><p align=center>NAME</p></th>
    <th><p align=center>PROPERTY ID</p></th>
    <th><p align=center>PRICE</p></th>
    <th><p align=center>TYPE</p></th>
    <th><p align=center>COUNTRY</p></th>
  </tr>

  </tr>
  <?php
    while ($row = pg_fetch_row($result)){
    echo "<tr>";
    echo "<td> </td>";
    echo "<td> </td>";
    echo "<td> </td>";
    echo "<td> </td>";
    echo "<td> </td>";
    echo "<td> <p align=center>$row[0] </p></td>";
    echo "<td> <p align=center>$row[1] </p></td>";
    echo "<td> <p align=center>$row[2] </p></td>";
    echo "<td> <p align=center>$row[3] </p></td>";
    echo "<td> <p align=center>$row[4] </p></td>";
    echo "<td> <p align=center>$row[5] </p></td>";
    echo "</tr>";
  }
  ?>
</table>

 <!--  while ($row = pg_fetch_row($result)){
    echo "<p align=center> $row[0] $row[2] $row[3] $row[4] $row[5] ;</p> ";
    //echo "<br />\n";
  }
 -->

</body>
</html>
