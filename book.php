<!DOCTYPE html>
<html>
<body>
<head>
	 <link href="./style.css" type="text/css" rel="stylesheet">
</head>	

<div>
  <p><a href="./index.html"> Home</a></p>
</div>

<h2 class='titlecenter'>Book a Property</h2>

  <div class="form">
    <form class="login-form">
      <input type="text" placeholder="Property ID"/>
      <input type="text" placeholder="Your Guest ID"/>      
      <p style="margin-top: 10px;" class="checkboxmessage">Check-In Date</p>
      <input type="date" placeholder="Check-In Date"/>
       <p style="margin-top: 10px;" class="checkboxmessage">Check-Out Date</p>
      <input type="date" placeholder="Check-Out Date"/>

      <button>submit</button>
       <form>
<input type="button" value="Cancel" onclick="window.location.href='./display_guest.php'" />
</form>
    </form>
  </div>
</div>

</body>
</html>