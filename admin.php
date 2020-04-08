<!DOCTYPE html>
<html>
<body>
<head>
	 <link href="./style.css" type="text/css" rel="stylesheet">
</head>	

<div>
  <p><a href="./index.html"> Home</a></p>
</div>


<h2 class='titlecenter'>Database Administrator</h2>

<div class="login-page">
	<form action="" method="post">
     <p style="margin-top: -75px;" class="headingcenter"> Your Queries </p>
    <textarea name ="querybox" class="query" rows="10" cols="80"></textarea>
      <input id="submit" name="submit" onclick="myFunction()" type="submit" value="Confirm">
</form>
  </div>

  <section> 
    <h2 class="headingcenter">Results</h2>
</section>

</body>


<table>
  <thead>
    <tr>
      <?php
      	$connection = pg_connect("host=ec2-3-234-109-123.compute-1.amazonaws.com port=5432
		dbname=d32q2phg95025m user=lqzdpzojxkruxi password= 5ee44c6c9c16025d9b8e67d6f0e0d182831d9b3c99d5e3e09e96d42f72776b80");

  	$querybox= $_POST['querybox'];
  	 $result = pg_query($connection, $querybox);


      $row = pg_fetch_assoc($result);
            foreach ($row as $col => $value) {
                echo "<th>";
                echo $col;
                echo "</th>";
            }
      ?>
    </tr>
  </thead>
  <tbody>
    <?php
  // Write rows
  pg_result_seek($result, 0);
    while ($row = pg_fetch_assoc($result)) {

        ?>

    </tr>
    <?php 

       foreach($row as $key => $value){
        echo "<td>";
        echo $value;
        echo "</td>";
    } ?>
        </tr>
    <?php } ?>
      </tbody>
</table>

</html>
