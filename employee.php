<!DOCTYPE html>
<html>
<body>
<head>
	 <link href="./style.css" type="text/css" rel="stylesheet">
</head>	

<div>
  <p><a href="./index.html"> Home</a></p>
</div>

<h2 class='titlecenter'>Employee</h2>

<div class="login-page">
  <div class="form">
      <p class="messageemp">Enter your Employee ID to see your list of properties</p>
    <form class="login-form">
      <input type="text" placeholder="ID"/>
      <button>Confirm</button>
    </form>
  </div>
</div>

<section> 
    <h2 class="headingcenter">(Display this section after id is entered)Properties accessible by you:</h2>
</section>

<?php  
  $connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com port=5432
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");
  $stat = pg_connection_status($connection);

  //change to employee.id = (user's input) etc.
  $result = pg_query($connection, "SELECT employee.id, employee.name, property.id, property.host_price, property.property_type, property.country FROM employee inner join property on employee.id = 2005 and property.employee_id = 2005");
  if (!$result){
    echo 'error\n';
    exit;
  }

  // while ($row = pg_fetch_row($result)){
  //   echo "ID: $row[0] NAME: $row[1] PROPERTY ID: $row[2] PRICE: $row[3] TYPE: $row[4] COUNTRY: $row[5]";
  //   echo "<br />\n";
  // }
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

</body>
</html>