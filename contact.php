<!DOCTYPE html>
<html>
<head>
  
  <meta name="viewpoint" content="width=device-width, initial-scale=1.0">	
  <link href="https://fonts.googleapis.com/css?family=Cinzel:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sonsie+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="contactstyle.css">

  <script src="assets/js/jquery-1.11.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/jSlider.css" />
  <script type="text/javascript" src="assets/js/jquery.jSlider.js"></script>
  </head>


<body>
<ul class="ul-list">
  <li class="li-list" id="sm">Smart Med</li>
  <li class="li-list"><a  href="index.php">Home</a></li>
  <li class="li-list"><a href="gallery.php">Gallery</a></li>
  <li class="li-list"><a href="about.php">About</a></li>
  <li class="li-list"><a  class="active"  href="contact.php">Contact</a></li>
</ul>


<div class="container">
	<div class="maps">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11738.66292060912!2d21.1443682!3d42.6472459!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa31dd05b21bd09de!2sUniversiteti+p%C3%ABr+Biznes+dhe+Teknologji!5e0!3m2!1sen!2s!4v1557935603845!5m2!1sen!2s" width=100% height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

	</div>
</div>

<div class="content">
	
	<h1>Get Social</h1>
	<div class="icon-bar">
	
	<ul>

		<li><a href="https://www.facebook.com" target="blank"><img src="images/contact-pic/facebook1.jpg"/></a></li>
		<li><a href="https://www.twitter.com" target="blank"><img src="images/contact-pic/twitter1.jpg"/></a></li>
		<li><a href="https://www.goole.com" target="blank"><img src="images/contact-pic/google.jpg"/></a></li>
		<li><a href="https://www.linkedin.com" target="blank"><img src="images/contact-pic/linkedin1.jpg"/></a></li>
    </ul>

	</div>
	
	<h1 id="info">Contact info</h1>
	<p>elluminati 2nd floor,<br> Aditya,Jalaram Nagar Street<br> Number 2,University<br> road,Behind Metro<br> Reataurant,Above<br> SBI,Branch,Rajkot 360007 
	
	<br>info@company.com</p>
	
	</div>
	<div class="content2">
	<h1>Get in touch with SmartMed</h1>
	
	<div class="contact-form">

	
    <form action="servercontact.php" method="post" >
 	
    <label for="name">Your Name</label>
    <input type="text" id="name" name="name"  placeholder="Your name..."
     data-validation="required length" 
					data-validation-length="min5"  required pattern="[a-zA-Z0-9\s]+">

					

    <label for="email">Your email</label>
    <input type="email" id="email" name="email"  placeholder="Your email..."
     data-validation="required email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" >
   	
    <label for="data">Enter date:</label>
    <input type="date" name="data"  placeholder="Write the date..." data-validation="data" data-validation-format="mm/dd/YYY/" required pattern="(0?[1-9]|[12][0-9]|3[01])/(0?[1-9]|1[012])/\d{4}">

    <label for="gender">Enter gender:</label>
    <input type="radio" name="gender" value="male"> Male
	<input type="radio" name="gender" value="female"> Female<br><br>


	<label for="checkbox">Save:</label><br>
	<input type="checkbox" name="checkbox[]" value="Bike"> I have a bike<br>
	<input type="checkbox" name="checkbox[]" value="Car"> I have a car<br>
	<input type="checkbox" name="checkbox[]" value="Boat" checked> I have a boat<br>


    <label for="city">City</label>
    <select id="city" name="city">
      <option value="ycity">Your city...</option> 		
      <option value="prishtine">Prishtine</option>
      <option value="prizren">Prizren</option>
      <option value="peje">Peje</option>
      <option value="gjilan">Gjilan</option>
      <option value="ferizaj">Ferizaj</option>
    </select>


    <label for="message">Message</label>
    <textarea id="message" name="message" placeholder="Write something..." style="height:250px" required></textarea>
    <input type="submit" value="submit" name="submit" >

  </form>
  <!--<?php
	/*$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
	if(strpos($fullUrl, "submit=empty") == true){
		echo "<p class ='error'>You did not fill in all fields</p>";
		exit();
	}
	elseif(strpos($fullUrl, "submit=char") == true){
		echo "<p class ='error'>You used invalid characters</p>";
		exit();
	}
	if(strpos($fullUrl, "submit=email") == true){
		echo "<p class ='error'>You used invalid email</p>";
		exit();
	}
	
	if(strpos($fullUrl, "submit=success") == true){
		echo "<p class ='success'>Your form is submitted</p>";
		exit();
	}*/


?>-->
</div>
</div>




<footer>

	<div class="C-Form">
		<h1>Get in Touch</h1>
		<div class="icon-bar2">
	
	    <ul>

			<li><a href="https://www.facebook.com" target="blank"><img src="images/contact-pic/facebook1.jpg"/></a></li>
			<li><a href="https://www.twitter.com" target="blank"><img src="images/contact-pic/twitter1.jpg"/></a></li>
		    <li><a href="https://www.goole.com" target="blank"><img src="images/contact-pic/google.jpg"/></a></li>
			<li><a href="https://www.linkedin.com" target="blank"><img src="images/contact-pic/linkedin1.jpg"/></a></li>
			<li><a href="https://venmo.com" target="blank"><img src="images/contact-pic/venmo.jpg"/></a></li>
			<li><a href="https://www.stumbleupon.com" target="blank"><img src="images/contact-pic/stumbleupon.jpg"/></a></li>
			<li><a href="http://digg.com" target="blank"><img src="images/contact-pic/digg.jpg"/></a></li>
    	</ul> 


		</div>
	
	</div>

	<div class="Contact-Text">
		<h1 id="title-contact">Contacts</h1>
		<img src="images/index-pic/location2.png"><p id="Contact-Content">PO Box 54321 Some str. 765, Los Angeles, California, United States</p>
		<img src="images/index-pic/telephone1.png"><p id="Contact-Content">+12 345 678 9123</p>
		<img src="images/index-pic/info.png"><a href="#" id="Contact-Link">info@company.com</a>
	</div>


</footer>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>
    <script>
		$.validate({
			errorMessageClass: "error",
		});
		if (!$.trim($("#myTextArea").val())) {
    // textarea is empty or contains only white-space
}
	</script>


</body>

</html>
