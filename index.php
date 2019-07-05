<?php
   
    require 'class/View.php';
    $obj_view = new View();
    $query_result = $obj_view->select_all_doctors();
    $query_result2 = $obj_view->select_all_positions();

?>
<html>
<head>
<style>
  
#login,#signup{
      margin-top: 14px;
    width: 6%;
    height: 25px;
    border: 0px;
    background: #a9a4d7;
    /* font-weight: 400; */
    letter-spacing: 4px;
    /* color: white; */
    border-radius: 4px;
    color: white;
}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Cinzel:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sonsie+One&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="assets/js/jquery-1.11.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/jSlider.css" />
  <script type="text/javascript" src="assets/js/jquery.jSlider.js"></script>
  </head>

<body>
<ul class="ul-list">
  <li class="li-list" id="sm">Smart Med</li>
  <li class="li-list"><a class="active" href="index.php">Home</a></li>
  <li class="li-list"><a href="gallery.php">Gallery</a></li>
  <li class="li-list"><a href="about.php">About</a></li>
  <li class="li-list"><a href="services.php">Services</a></li>
  <li class="li-list"><a href="contact.php">Contact</a></li>

  <a href="/SmartMed/admin/Login-Signup/index.php"">
    <button id="login">Login</button>
</a>
    
    <a href="/SmartMed/admin/Login-Signup/register.php"">
    <button id="signup">Signup</button>
</a>
    
</ul>

<div id="medium-content">
  <div class="slideri">
    <div id="slider1" class="jSlider">
      <div><img src="slider/images/03.jpg" alt="" /></div>
      <div><img src="slider/images/04.jpeg" alt="" /></div>
      <div><img src="slider/images/05.jpg" alt="" /></div>
        <div><img src="slider/images/06.jpg" alt="" /></div>
      <div><img src="slider/images/07.jpg" alt="" /></div>
    </div>
  </div>
</div>


<div class="flex-container">
  <div class="row">
    <div class="column1">
      <div class="overlay">
       <p class="doctor">Doctor</p>
       <p class="visit">Visit</p>
        <form>
          <input type="text" placeholder="Full Name">
          <select class="form-control" name="department" id="department">
                <option id="cardio">Cardiology</option>
                <option>Pharmacy</option>
                 <option>Physiotherapy</option>
         </select>
          <input type="text" placeholder="Phone">
          <button type="submit" id="order">Make An Order</button>
        </form>
      </div>
    </div>

    <div class="column2"> 
      <div class="overlay">
        <p class="doctor">Hospital</p>
        <p class="visit">Work</p>
        <ul>
          <li>➣ Psychiatry Department</li><hr>
          <li>➣ Pediatrics</li><hr>
          <li>➣ Dental Clinic</li><hr>
          <li>➣ Cardiology</li><hr>
        </ul>
      </div>
    </div>
    <div class="column3">
      <div class="overlay">
        <p class="doctor">Working</p>
        <p class="visit">Hours</p>
        <ul class="time">
          <li> Monday-Friday <strong> 09:00 - 20:00</strong>  </li>
          <hr>
          <li>Saturday   <Strong>10:00 - 18:00</Strong></li>
          <hr>
          <li>Sunday  <strong>Closed  </strong></li>
          <hr>
        </ul>
       </div>
  </div>
</div>  

</div>
<div class="staff-container">
  <p id="title">Our staff</p>
  <div class="row">
    
      
       <?php while ( $doctors = mysqli_fetch_assoc($query_result)) { ?>
        <div class="staff-personel">
          <?php
        echo'<img src="data:image/png;base64,'.base64_encode( $doctors['photo'] ).'" class="staffphoto"/>';
        ?>
     <p class="name"><?php echo $doctors['name'];?> </p>

      
     <p class="position"><?php echo $doctors['position'];?></p>
        
       
    
        <div class="staff-icons">
         <a href="https://www.facebook.com/"><img src="assets/images/index-pic/facebook.png"></a>
          <a href="https://outlook.live.com/owa/"><img src="assets/images/index-pic/mail.png"></a>
          <a href="https://www.linkedin.com/"><img src="assets/images/index-pic/linkedin.png"></a>
         </div>
      </div>
     <?php }?>
  
     
      </div>




<div class="services">
  <div class="row">
    <img src="assets/images/index-pic/transparent1.png" id="services-photo"> 
    <div class="s-parts">
      <div class="parts-text">
        <p id="services-title">Why Choose Us?</p>
        <p id="services-content">   At vero eos et accusam et justo duo dolores et ea rebum stet clita. </p>
      </div>

      <div class="Left-Side">
        <img src="assets/images/index-pic/circle1.png" id="lista-img">
        <p>Modern Clinic</p>
        <img src="assets/images/index-pic/circle3.png" id="lista-img">
        <p> If Emergency</p>
      </div>

      <div class="Right-Side">
        <img src="assets/images/index-pic/circle2.png" id="lista-img">
        <p>Qualified Doctors</p>
        <img src="assets/images/index-pic/circle4.png" id="lista-img">
        <p id="health-care">Health Care</p>
      </div>
    </div>
  </div>
</div>


<div class="subscribe-container"> 
    <div class="Subscribe-Text">
      <h3 >Subscribe to </h3>
      <h1>NEWSLETTER</h1>
      <input type="text" placeholder="Write your email here..">
      <button id="Subscribe-button"> SIGN UP</button>
    </div>
    <div class="row">
       <div class="doc-number">
          <div id="doc-text">
            <img src="assets/images/index-pic/num1.png">
            <p id="num">540</p>
            <p id="num-content">Doctor</p>
          </div>
        </div>
        <div class="doc-number">
          <div id="doc-text">
            <img src="assets/images/index-pic/num2.png" id="num2-img"> 
            <p id="num1">435</p>
            <p id="num-content">Patient</p>
           </div>
        </div>
       <div class="doc-number">
          <div id="doc-text">
            <img src="assets/images/index-pic/num4.png">
            <p id="num2">256</p>
            <p id="num-content">Rooms</p>
         </div>
        </div> 
 
        <div class="doc-number">
          <div id="doc-text">
            <img src="assets/images/index-pic/num5.png">
            <p id="num3">100</p>
            <p id="num-content">Saved</p>
        </div>
      </div>
  </div>
</div>


<div class="contact-container">
  <div class="row">
    <div class="C-Form">
       <h1>Get in Touch</h1>
        <p>Lorem ipsum dolor sit amet, consectetur venenatis tincidunt.</p>
        <form>
          <input type="text" id="name" name="firstname" placeholder="Your Name">
          <input type="text" id="lname" name="lastname" placeholder="Email"><br>
          <input type="text" id="sms" name="lastname" placeholder="Message"><br>
          <button>Send Message</button>
      </form>
    </div>
    <div class="C-Form">
      <div class="Contact-Text">
        <h1 id="title-contact">Contacts</h1>
        <img src="assets/images/index-pic/location2.png"><p id="Contact-Content">PO Box 54321 Some str. 765, Los Angeles, California, United States</p>
        <img src="assets/images/index-pic/telephone1.png"><p id="Contact-Content">+12 345 678 9123</p>
        <img src="assets/images/index-pic/info.png"><a href="#" id="Contact-Link">info@company.com</a>
      </div>
    </div>
  </div>
</div>



<script>
  var speed = 0.1;

/* Call this function with a string containing the ID name to
 * the element containing the number you want to do a count animation on.*/
function incEltNum(id) {
  elt = document.getElementById(id);
  endNum = Number(document.getElementById(id).innerHTML);
  incNumRec(0, endNum, elt);
}

/*A recursive function to increase the number.*/
function incNumRec(i, endNum, elt) {
  if (i <= endNum) {
    elt.innerHTML = i;
    setTimeout(function() {//Delay a bit before calling the function again.
      incNumRec(i + 1, endNum, elt);
    }, speed);
  }
}

incEltNum("num");
incEltNum("num1"); /*Call this funtion with the ID-name for that element to increase the number within*/
incEltNum("num2");
incEltNum("num3");
</script>
</body>
</html>