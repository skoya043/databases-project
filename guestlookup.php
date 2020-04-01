<!DOCTYPE html>
<html>
<body>
<head>
   <link href="./style.css" type="text/css" rel="stylesheet">
</head> 

<div>
  <p><a href="./index.html"> Home</a></p>
</div>

<h2 class='titlecenter'>Look-Up a Property</h2>

  <div class="form">
    <form class="login-form">
      <input type="text" placeholder="Your Guest ID"/>      
      <input type="text" placeholder="Min Price (Should we change this to a range spinner?) "/>     
      <input type="text" placeholder="Max Price"/>    
       <input type="text" placeholder="City"/>   
       <input type="text" placeholder="Province"/>      
       <input type="text" placeholder="Country"/>  
        <p style="margin-top: 10px;" class="checkboxmessage">Check-In Date</p>
      <input type="date" placeholder="Check-In Date"/>
       <p style="margin-top: 10px;" class="checkboxmessage">Check-Out Date</p>
      <input type="date" placeholder="Check-Out Date"/>    
      <button>Search</button>
  <form>
<input type="button" value="Book a Property" onclick="window.location.href='./book.php'" />
</form>
  <form>
<input type="button" value="Leave a Review" onclick="window.location.href='./review.php'" />
</form>
  <form>
<input type="button" value="Cancel" onclick="window.location.href='./guest.php'" />
</form>
    </form>
  </div>

<section> 
    <h2 class="headingcenter">(Display this section after Search is clicked)Available Properties:</h2>
</section>
</body>


<?php 

$connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com port=5432
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");
  $stat = pg_connection_status($connection);

  //change to SELECT * FROM property WHERE each attribute matches user input fields
  $result = pg_query($connection, "SELECT * FROM property ");
  if (!$result){
    echo 'error\n';
    exit;
  }
?>

<table align=center>
  <table cellspacing="15">
  <colgroup>
    <col span="13">

  </colgroup>
  <tr>

    <th><p align=center>PROPERTY ID</p></th>
    <th><p align=center>PRICE</p></th>
    <th><p align=center>TYPE</p></th>
    <th><p align=center>START DAY</p></th>
    <th><p align=center>END DAY</p></th>
    <th style="width: 150px;"><p align=center>ADDRESS</p></th>
    <th><p align=center>DESCRIPTION</p></th>
    <th><p align=center>ROOM TYPE</p></th>
    <th><p align=center>POOL</p></th>
    <th><p align=center>WIFI</p></th>
    <th><p align=center>LAUNDRY</p></th>
    <th><p align=center>BED COUNT</p></th>
    <th><p align=center>BATH COUNT</p></th>
  </tr>

  </tr>
  <?php
    while ($row = pg_fetch_row($result)){
    echo "<tr>";
    echo "<td> <p align=center>$row[1] </p></td>";
    echo "<td> <p align=center>$row[5] </p></td>";
    echo "<td> <p align=center>$row[6] </p></td>";
    echo "<td> <p align=center>$row[7]/$row[8]/$row[9] </p></td>";
    echo "<td> <p align=center>$row[10]/$row[11]$row[12] </p></td>";
    echo "<td style='width: 150px;'> <p align=center>$row[13] $row[14], $row[15], $row[16], $row[17]. </p></td>";
    echo "<td> <p align=center>$row[18] </p></td>";
    echo "<td> <p align=center>$row[19] </p></td>";
    echo "<td> <p align=center>$row[20] </p></td>";
    echo "<td> <p align=center>$row[21] </p></td>";
    echo "<td> <p align=center>$row[22] </p></td>";
    echo "<td> <p align=center>$row[23] </p></td>";
    echo "<td> <p align=center>$row[24] </p></td>";
    echo "</tr>";
  }

?>

</html>
