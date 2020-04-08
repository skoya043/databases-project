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
   <script src="./script.js"></script>

</head>	

<div>
  <p><a href="./index.html"> Home</a></p>
</div>

<h2 class='titlecenter'>Leave a Review</h2>

  <div class="form">
    <div class="ajax">
    <form class="login-form">
      <input id = propertyid type="text" placeholder="Property ID"/>
      <input id = guestid type="text" placeholder="Your Guest ID"/>
      <input id = ratingvalue type="text" placeholder="Rating (1 - 5)"/>
      <input id = cleanliness type="text" placeholder="Cleanliness (1 - 5)"/>
      <input id = communication type="text" placeholder="Communication (1 - 5)"/>
      <input type="text" placeholder="Comments"/>
      <input id="submit" name="submit" type="submit" onclick="review()"value="Confirm">

  <form>
<input type="button" value="Cancel" onclick="window.location.href='./guest.php'" />
</form>
    </form>
  </div>
</div>

<?php

  $connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com port=5432
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");

if(isset($_POST['submit'])){ 
  if($_POST['submit'] == 'Confirm')
  {
      $propertyid = $_POST['propertyid'];
      $guestid = $_POST['guestid'];
      $ratingvalue = $_POST['ratingvalue'];
      $cleanliness = $_POST['cleanliness'];
      $communication = $_POST['communication'];

      if($propertyid!=null && $guestid!=null && $ratingvalue!=null && $cleanliness!=null && $communication!=null){

        $reviewid = pg_query($connection, "SELECT review.id FROM review, property, property_agreement WHERE review.id = property.review_id 
        and property.id = property_agreement.property_id and property.id = property_agreement.property_id and property.id=$propertyid and property_agreement.guest_id=$guestid"); 

        while ($row = pg_fetch_row($reviewid)){
             $review = $row[0];
        }

      // $sql = pg_query($connection, "INSERT INTO review(id, ratevalue, communication, cleanliness) VALUES (%reviewid, $ratingvalue, '$communication', '$cleanliness')" ); 

        $query= pg_query($connection, "UPDATE review SET 
          review.ratevalue = $ratingvalue, review.communication = '$communication', review.cleanliness = '$cleanliness' WHERE id = $review;");
      }

      if($sql){
        echo "<script type='text/javascript'>alert('Review Successfully Completed');</script>"; 

      }else{
        echo "<script type='text/javascript'>alert('Failure. Fill All Fields.');</script>";
      }
  }}
?>

</body>
</html>