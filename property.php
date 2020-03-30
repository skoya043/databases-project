<!DOCTYPE html>
<html>
<body>
<head>
	 <link href="./style.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>	

<div>
  <p><a href="./index.html"> Home</a></p>
</div>

<h2 style= "margin-top: 50px;" class='titlecenter'>Create a Property</h2>

<div class="login-page">
  <div style ="margin-top: -50px; width: 500px;"" class="form">
    <form class="login-form">
      <input type="text" placeholder="Your Host ID"/>
      <input type="text" placeholder="Name"/>
      <input type="text" placeholder="House Number"/>
      <input type="text" placeholder="Street"/>
      <input type="text" placeholder="City"/>
      <input type="text" placeholder="Province"/>
      <input type="text" placeholder="Country"/>
      <input type="text" placeholder="Email"/>
      <input type="text" placeholder="Phone Number"/>
      <input type="text" placeholder="Price per Night"/>
      <input type="text" placeholder="Number of Beds"/>
      <input type="text" placeholder="Number of Baths"/>
      <div>
      <p style="margin-top: 10px;" class="checkboxmessage">Property Type</p>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Apartment
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Bed and Breakfast
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Unique Home
    </label>      
      <label class="checkbox-inline">
      <input type="checkbox" value="">Vacation Home
    </label>      
    </div>
    <div style="margin-top: 10px;">
     <p style="margin-top: 10px;" class="checkboxmessage">Room Type</p>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Unique
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Shared
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Private
    </label>           
    </div>
    <div  style="margin-bottom: 30px;">
      <p style="margin-top: 10px;" class="checkboxmessage">Amenities</p>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Pool
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Wifi
    </label>
    <label class="checkbox-inline">
      <input type="checkbox" value="">Laundry
    </label>           
    </div>
    <button>Submit</button>
  <form>
<input type="button" value="Cancel" onclick="window.location.href='./host.php'" />
</form>
      <p class="message">After creating a property and clicking submit, it should give you a message in JS, "property created", then page refreshes and you click cancel to take you back to the host page. Then you can enter your id to see your updated list of properties</p>
    </form>
  </div>
</div>

</body>
</html>