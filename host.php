<?php 
  $connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");
  $stat = pg_connection_status($connection);

  if($stat === PGSQL_CONNECTION_OK){
    echo 'connected';
  } else {
    echo 'error connecting';
  }

  
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

<h2 class='titlecenter'>Host</h2>

  <div id ="form" class="form">
      <p class="messageemp">Enter your Host ID to see the list of properties owned by you</p>
      <div class="ajax">
    <form id="login-form" class="login-form">
      <input id='id' type="text" placeholder="ID"/>
      <input id="submit" onclick="myFunction()" type="button" value="Confirm">
      <p class="message">New Properties? <a href="./property.php">Create a property</a></p>
          </form>
        </div>
  </div>
</div>

<section> 
    <h2 class="headingcenter">(Display this section after id is entered)Properties owned by you:</h2>
</section>

</body>
</html>
