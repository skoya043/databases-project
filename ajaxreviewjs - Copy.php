<?php
	$connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");

	$propertyid = (int)$_POST['propertyid'];
    $guestid = (int)$_POST['guestid'];
    $ratingvalue = (float)$_POST['ratingvalue'];
    $cleanliness = $_POST['cleanliness'];
    $communication = $_POST['communication'];

  
    //create a random new review id
    $reviewid = rand(4100, 4300);

	if (isset($_POST['propertyid'])) {

		//insert the new review into db
    	$createReview = pg_query($connection, "INSERT INTO review(id, ratevalue, communication, cleanliness) VALUES ($reviewid, $ratingvalue, $communication, $cleanliness)");

    	//update property table
    	$update = pg_query($connection, "UPDATE property SET review_id = $reviewid WHERE property.id=$propertyid");

		echo "Your review has been submitted succesfully";

	} else {
		echo "Insertion Failed";
	}
	pg_close($connection); 
?>