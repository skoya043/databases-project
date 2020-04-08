<!DOCTYPE html>
<html>
<body>
<head>
   <link href="./style.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="./script.js"></script>
</head> 

<div>
  <p><a href="./index.html"> Home</a></p>
</div>

<h2 style= "margin-top: 50px;" class='titlecenter'>Create a Property</h2>

<div class="login-page">
  <div style ="margin-top: -50px; width: 500px;"" class="form">
    <form id="form" name= "form" class="login-form" method="post">
      <input id="hostid" name="hostid" type="text" placeholder="Your Host ID"/>
      <input id="name" name="name" type="text" placeholder="Name"/>
      <input id = "housenum" name = "housenum" type="text" placeholder="House Number"/>
      <input id = "street" name = "street" type="text" placeholder="Street"/>
      <input id = "city" name = "city" type="text" placeholder="City"/>
      <input id = "province" name = "province" type="text" placeholder="Province"/>
      <input id = "country"  name = "country" type="text" placeholder="Country"/>
      <input id = "email" name = "email" type="text" placeholder="Email"/>
      <input id = "phonenum" name = "phonenum" type="text" placeholder="Phone Number"/>
      <input id = "pricepernight" name = "pricepernight" type="text" placeholder="Price per Night"/>
      <input id = "bednum" name = "bednum" type="text" placeholder="Number of Beds"/>
      <input id = "bathnum" name = "bathnum" type="text" placeholder="Number of Baths"/>
      <input id = "description" name = "description" type="text" placeholder="Description"/>
            <p style="margin-top: 10px;" class="checkboxmessage">Start Date</p>
      <input id = "checkin" name = "checkin" type="date" placeholder="Check-In Date"/>
       <p style="margin-top: 10px;" class="checkboxmessage">End Date</p>
      <input id = "checkout" name = "checkout" type="date" placeholder="Check-Out Date"/>
      <div>
      <p style="margin-top: 10px;" class="checkboxmessage">Property Type</p>
    <label class="checkbox-inline">
      <input type="radio" name="property_type" value="Apartment" checked>Apartment
    </label>
    <label class="checkbox-inline">
      <input type="radio" name="property_type" value="Bed and Breakfast">Bed and Breakfast
    </label>
    <label class="checkbox-inline">
      <input type="radio" name="property_type" value="Unique Home">Unique Home
    </label>      
      <label class="checkbox-inline">
      <input type="radio" name="property_type" value="Vacation Home">Vacation Home
    </label>      
    </div>
    <div style="margin-top: 10px;">
     <p style="margin-top: 10px;" class="checkboxmessage">Room Type</p>
    <label class="checkbox-inline">
      <input type="radio" name="room_type" value="Unique" checked>Unique
    </label>
    <label class="checkbox-inline">
      <input type="radio" name="room_type" value="Shared">Shared
    </label>
    <label class="checkbox-inline">
      <input type="radio" name="room_type" value="Private">Private
    </label>           
    </div>
    <div  style="margin-bottom: 30px;">
      <p style="margin-top: 10px;" class="checkboxmessage">Amenities</p>
    <label class="checkbox-inline">
      <input type="checkbox" name= "pool" value="pool">Pool
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name= "wifi" value="wifi">Wifi
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" name= "laundry" value="laundry">Laundry
    </label>           
    </div>
        <input id="submit" name="submit" type="submit" onclick="propertyFunction()" value="Submit"/>
<input type="button" value="Cancel" onclick="window.location.href='./host.php'" />
</form>
  </div>
</div>

<?php
    $connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com port=5432
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");


if(isset($_POST['submit'])){
  if($_POST['submit']=="Submit"){

    $randomid=rand(0,10000);

$hostid = (int) $_POST['hostid'];
$name = $_POST['name'];
$housenum = $_POST['housenum'];

$street = $_POST['street'];
$city = $_POST['city'];
$province = $_POST['province'];
$country = $_POST['country'];
$email = $_POST['email'];
$phonenum = $_POST['phonenum'];
$pricepernight = (real) $_POST['pricepernight'];
$bednum = (int) $_POST['bednum'];
$bathnum = (int) $_POST['bathnum'];
$description = $_POST['description'];
$checkin = $_POST['checkin'];
$checkout = $_POST['checkout'];


$start = DateTime::createFromFormat('Y-m-d', $_POST['checkin']);
$end = DateTime::createFromFormat('Y-m-d', $_POST['checkout']);

  if ($start < $end) {
      $time1=strtotime($checkin);
        $sday=date('d',$time1);
        $smonth=date('n',$time1);
        $syear=date('Y',$time1);


      $time2=strtotime($checkout);
        $eday=date('d',$time2);
        $emonth=date('n',$time2);
        $eyear=date('Y',$time2);
      } else {

    echo "<script type='text/javascript'>alert('Start Date must be before End Date');</script>";
}


$property_type = $_POST['property_type'];
$room_type = $_POST['room_type'];

if (isset($_POST['pool'])) {
    $pool = 'true';
  } else{
    $pool='null';
  }

if (isset($_POST['wifi'])) {
    $wifi = 'true';
  } else{
    $wifi='null';
  }

if (isset($_POST['laundry'])) {
    $laundry = 'true';
  } else{
    $laundry='null';
  }


if($hostid!=null && $name!=null && $housenum!=null && $street!=null && $city!=null && $province!=null && $country!=null && $email!=null && $phonenum!=null && $pricepernight!=null && $bednum!=null && $bathnum!=null && $description!=null){
    $employee_id= pg_query($connection, "select employee.id from employee join branch on employee.branch_id=branch.id where branch.country='$country' order by RANDOM() limit 1");

      while ($row = pg_fetch_row($employee_id)){
        $employee=$row[0];
      }

  $query = pg_query($connection, "insert into property(id, host_id, employee_id, review_id, host_price, property_type, start_day, start_month, start_year, end_day, end_month, end_year, house_num, street, city, province, country, description, room_type, pool, wifi, laundry, bed_count, bath_count) values ($randomid, $hostid, $employee, null, $pricepernight, '$property_type', $sday, $smonth, $syear, $eday, $emonth, $eyear, '$housenum', '$street', '$city', '$province', '$country', '$description', '$room_type', $pool, $wifi, $laundry, $bednum, $bathnum)"); //Insert Query
  if($query){
    echo "<script type='text/javascript'>alert('Property Successfully Created');</script>";
  }

}else{
      echo "<script type='text/javascript'>alert('Failure. Fill All Fields.');</script>";

}
}
}
    
  ?>
</table>

</body>
</html>