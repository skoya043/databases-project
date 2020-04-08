<?php 
  $connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");
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

<h2 class='titlecenter'>Look-Up a Property</h2>

  <div class="form">
    <form class="login-form" method="post">
      <div class="ajax">
    <form action="" method="POST" id="login-form" class="login-form"> 
      <input id='min' name='min' type="text" placeholder="Min Price"/>     
      <input id='max' name='max' type="text" placeholder="Max Price"/>
      <input id='city' name='city' type="text" placeholder="City"/> 
      <input id='province' name='province' type="text" placeholder="Province"/> 
      <input id='country' name='country' type="text" placeholder="Country"/>
        <p style="margin-top: 10px;" class="checkboxmessage">Check-In Date</p>
      <input id='checkin' name='checkin' type="date" placeholder="Check-In Date"/>
       <p style="margin-top: 10px;" class="checkboxmessage">Check-Out Date</p>
      <input id='checkout' name='checkout' type="date" placeholder="Check-Out Date"/>    
      <input id="submit" name="submit" onclick="guestlookup()" type="submit" value="Search">
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
</div>

<section> 
    <h2 class="headingcenter">Available Properties:</h2>
</section>
</body>

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

<?php  
  $connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com port=5432
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");

    if(isset($_POST['submit'])){
      if($_POST['submit']=="Search"){

      $min_price = (float)$_POST['min'];
      $max_price = (float)$_POST['max'];
      $city = $_POST['city'];
      $province = $_POST['province'];
      $country = $_POST['country'];
      $checkin = $_POST['checkin'];
      $checkout = $_POST['checkout'];

      $time1=strtotime($checkin);
        $sday= date('d',$time1);
        $smonth= date('n',$time1);
        $syear= date('Y',$time1);

      $time2=strtotime($checkout);
        $eday= date('d',$time2);
        $emonth= date('n',$time2);
        $eyear= date('Y',$time2);

          if($min_price!=null && $max_price!=null && $city!=null && $country!=null && $province!=null && $checkin!=null && $checkout!=null){

              $result = pg_query($connection, "SELECT * FROM property WHERE property.host_price >= $min_price and property.host_price <= $max_price and property.city = '$city' and property.province = '$province' and property.country = '$country' and property.start_day = $sday and property.start_month = $smonth and property.start_year = $syear and property.end_day = $eday and property.end_month = $emonth and property.end_year = $eyear and property.id NOT IN (SELECT property_agreement.property_id FROM property_agreement)");

              while ($row = pg_fetch_row($result)){
                      echo "<tr>";
                      echo "<td> <p align=center>$row[0] </p></td>";
                      echo "<td> <p align=center>$row[4] </p></td>";
                      echo "<td> <p align=center>$row[5] </p></td>";
                      echo "<td> <p align=center>$row[8]/$row[7]/$row[6] </p></td>";
                      echo "<td> <p align=center>$row[11]/$row[10]/$row[9]</p></td>";
                      echo "<td style='width: 150px;'> <p align=center>$row[12] $row[13], $row[14], $row[15], $row[16]. </p></td>";
                      echo "<td> <p align=center>$row[17] </p></td>";
                      echo "<td> <p align=center>$row[18] </p></td>";
                      echo "<td> <p align=center>$row[19] </p></td>";
                      echo "<td> <p align=center>$row[20] </p></td>";
                      echo "<td> <p align=center>$row[21] </p></td>";
                      echo "<td> <p align=center>$row[22] </p></td>";
                      echo "<td> <p align=center>$row[23] </p></td>";
                      echo "</tr>";
              }

        }
    }}
?>
</html>
