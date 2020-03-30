<!DOCTYPE html>
<html>
<body>
<head>
	 <link href="./style.css" type="text/css" rel="stylesheet">
</head>	

<div>
  <p><a href="./index.html"> Home</a></p>
</div>

<h2 class='titlecenter'>Host</h2>

  <div class="form">
      <p class="messageemp">Enter your Host ID to see the list of properties owned by you</p>
    <form class="login-form">
      <input type="text" placeholder="ID"/>
      <button>Confirm</button>
      <p class="message">New Properties? <a href="./property.php">Create a property</a></p>
          </form>
  </div>
</div>

<section> 
    <h2 class="headingcenter">(Display this section after id is entered)Properties owned by you:</h2>
</section>
	
<?php 
  $connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com port=5432
    dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");
  $stat = pg_connection_status($connection);

  $result = pg_query($connection, "SELECT host.id, host.first_name, property.id, property.host_price, property.property_type, property.country FROM host inner join property on host.id = 3000 and property.host_id = 3000");
  if (!$result){
    echo 'error\n';
    exit;
  }

  while ($row = pg_fetch_row($result)){
    echo "ID: $row[0] NAME: $row[1] PROPERTYID: $row[2] PRICE: $row[3] TYPE: $row[4] COUNTRY: $row[5]";
    echo "<br />\n";
  }

?>
</body>
</html>
