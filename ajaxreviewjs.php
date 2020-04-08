<?php
	$connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");

	$propertyid = $_POST['propertyid'];
    $guestid = $_POST['guestid'];
    $ratingvalue = $_POST['ratingvalue'];
    $cleanliness = $_POST['cleanliness'];
    $communication = $_POST['communication'];

    //find the review id that corresponds to the inputted propertyid and guestid  
    $reviewid = pg_query($connection, "SELECT review.id FROM review, property, property_agreement WHERE review.id = property.review_id and property.id = property_agreement.property_id and property.id = property_agreement.property_id and property.id=$propertyid and property_agreement.guest_id=$guestid"); 

	if (isset($_POST['propertyid'])) {
		// $query = pg_query("INSERT into review(id, ratevalue, communication, cleanliness) values ($reviewid, $ratingvalue, '$communication','$cleanliness')"); 
		
		// $query= pg_query($connection, "UPDATE review SET 
  //         review.ratevalue = $ratingvalue, review.communication = '$communication', review.cleanliness = '$cleanliness' WHERE id = $reviewid");

		echo "Your review has been submitted succesfully";

	} else {
		echo "Insertion Failed";
	}
	pg_close($connection); 
?>