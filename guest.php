<!DOCTYPE html>
<html>
<body>
<head>
	 <link href="./style.css" type="text/css" rel="stylesheet">
</head>	

<div>
  <p><a href="./index.html"> Home</a></p>
</div>

<h2 class='titlecenter'>Guest</h2>

  <div class="form">
      <p class="messageemp">Enter your Guest ID to see the list of properties currently booked by you</p>
    <form class="login-form">
      <input type="text" placeholder="ID"/>
      <button>Submit</button>
       <form>
<input type="button" value="Look-Up Available Properties" onclick="window.location.href='./guestlookup.php'" />
</form>      
       <form>
<input type="button" value="Leave a Review" onclick="window.location.href='./review.php'" />
</form>


    </form>
  </div>
</div>

<section> 
    <h2 class="headingcenter">(Display this section after id is entered)Properties currently booked by you:</h2>
</section>

<?php  
  $connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com port=5432
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");
  $stat = pg_connection_status($connection);

  //change guest id to the inputted ID
  $result = pg_query($connection, "SELECT guest.id, guest.first_name, property.id, property.host_price, property.property_type, property.country FROM guest, property_agreement, property WHERE guest.id = 7000 and property_agreement.guest_id = 7000 and property_agreement.property_id = property.id ");
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

</body>
</html>