<!DOCTYPE html>
<html>
<body>
<head>
	 <link href="./style.css" type="text/css" rel="stylesheet">
</head>	

<div>
  <p><a href="./index.html"> Home</a></p>
</div>

<h2 class='titlecenter'>Guest</h2>

  <div class="form">
      <p class="messageemp">Enter your Guest ID to see the list of properties currently booked by you</p>
    <form class="login-form">
      <input type="text" placeholder="ID"/>
      <button>Submit</button>
       <form>
<input type="button" value="Look-Up Available Properties" onclick="window.location.href='./display_guestlookup.php'" />
</form>      
       <form>
<input type="button" value="Leave a Review" onclick="window.location.href='./display_review.php'" />
</form>


    </form>
  </div>
</div>

<section> 
    <h2 class="headingcenter">(Display this section after id is entered)Properties currently booked by you:</h2>
</section>

</body>
</html>