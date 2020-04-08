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

<h2 class='titlecenter'>Payment</h2>

  <div class="form">
    <form id="form" name= "form" class="login-form" method="post">
  <div class="ajax">
      <input id='propertyID' name='propertyID' type="text" placeholder="Property ID"/>
      <input  id='guestID' name='guestID' type="text" placeholder="Your Guest ID"/>   
    
      <input id='Paytype' name='Paytype' type="text" placeholder="Payment Type (Cash, Check, Credit, Debit)"/>
      <input id='amountValue' name='amountValue'  type="text" placeholder="Amount"/>
       
	   
    
    
    <input id="submit" name="submit" type="submit"  value="Submit"/>
    
       <input type="button" value="Cancel" onclick="window.location.href='./guest.php'" />
	   
	   

    </form>
  </div>
</div>





<?php 
  $connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");
  
  
  if(isset($_POST['submit'])){
	  
	  



    
	$paymentID = rand(9600,11600);
	$propertyID=(int) $_POST['propertyID'];
    $guestID=(int) $_POST['guestID']; 
	$amountValue=(float) $_POST['amountValue']; 
	$Paytype=(string) $_POST['Paytype'];
	


      if($propertyID!=null && $guestID!=null  && $amountValue!=null  && $Paytype!=null  ){

    
    
    $query = pg_query($connection, "insert into payment values ($paymentID, NULL, $guestID,$propertyID,NULL,$amountValue,'bought','$Paytype')"); //Insert Query
	$query2 = pg_query($connection, "Update  payment Set  property_type=(SELECT property_type from property where ID=$propertyID) where ID=$paymentID");
	$query3 = pg_query($connection, "Update  payment Set  property_agreement_id= (SELECT property_agreement.ID from property_agreement where property_id=$propertyID) where ID=$paymentID");
	$query4 = pg_query($connection, "Update  payment Set  host_id= (SELECT host_ID from property where property.ID=$propertyID) where ID=$paymentID");
	
	
	
    
    if($query && $query2 && $query3 && query4){
        echo "<script type='text/javascript'>alert('Property Successfully bought');</script>";
        }

    
  }else{
            echo "<script type='text/javascript'>alert('fail');</script>";

  }
  
}
  ?>
</body>

  </html>
