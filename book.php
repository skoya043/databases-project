<!DOCTYPE html>
<html>
<body>

<head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
   <link href="./style.css" type="text/css" rel="stylesheet">
   <script src="script.js"></script>
</head> 



<head>
   <link href="./style.css" type="text/css" rel="stylesheet">
</head> 

<div>
  <p><a href="./index.html"> Home</a></p>
</div>

<h2 class='titlecenter'>Book a Property</h2>

  <div class="form">
    <form id="form" name= "form" class="login-form" method="post">
  <div class="ajax">
      <input id='propertyID' name='propertyID' type="text" placeholder="Property ID"/>
      <input  id='guestID' name='guestID' type="text" placeholder="Your Guest ID"/>   
    
      <p style="margin-top: 10px;" class="checkboxmessage">Check-In Date</p>
      <input id='checkin' name='checkin' type="date" placeholder="Check-In Date"/>
       <p style="margin-top: 10px;" class="checkboxmessage">Check-Out Date</p>
      <input id='checkout' name='checkout' type="date" placeholder="Check-Out Date"/>
    
    
    <input id="submit" name="submit" type="submit"  value="Submit"/>
    
       <input type="button" value="Cancel" onclick="window.location.href='./guest.php'" />
	   
	   <input type="button" value="Go To Payment" onclick="window.location.href='./payment.php'" />

    </form>
  </div>
</div>





<?php 
  $connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");
  
  
  if(isset($_POST['submit'])){
	  
	  
	  



    $property_agreementID = rand(8300,9500); 
	$propertyID=(int) $_POST['propertyID'];
    $guestID=(int) $_POST['guestID'];
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
	
	}
	else{
		
		  echo "<script type='text/javascript'>alert('Start Date must be before End Date');</script>";
	}
	


      if($propertyID!=null && $guestID!=null){

    
    
    $query = pg_query($connection, "insert into property_agreement values ($property_agreementID, $guestID, $propertyID,$sday,$smonth,$syear,$eday,$emonth,$eyear)"); //Insert Query
    
    if($query){
        echo "<script type='text/javascript'>alert('Property Successfully booked');</script>";
        }

    
  }else{
            echo "<script type='text/javascript'>alert('fail');</script>";

  }
  
}
  ?>
</body>

  </html>
