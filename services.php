<?php
    require 'class/Services.php';
    $obj_view = new Services();
    $query_result = $obj_view->select_all_services();

  ?>
<!DOCTYPE html>
<html>
<meta name="viewpoint" content="width=device-width, initial-scale=1.0">	
  <link href="https://fonts.googleapis.com/css?family=Cinzel:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sonsie+One&display=swap" rel="stylesheet">
  <!--<link rel="stylesheet" type="text/css" href="style2.css">-->
  <link rel="stylesheet" type="text/css" href="styleservices.css">
  <link rel="stylesheet" type="text/css" href="style.css">
 
  
  <script src="assets/js/jquery-1.11.3.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/css/jSlider.css" />
  <script type="text/javascript" src="assets/js/jquery.jSlider.js"></script>
  </head>


<body>
<ul class="ul-list">
  <li class="li-list" id="sm">Smart Med</li>
  <li class="li-list"><a  href="index.html">Home</a></li>
  <li class="li-list"><a href="gallery.html">Gallery</a></li>
  <li class="li-list"><a href="about.html">About</a></li>
  <li class="li-list"><a  class="active"  href="contact.html">Contact</a></li>
</ul>

<header class="wrapper1">
    <div class="wrapper1-image">
        <img src="images/services-pic/fig1.jpg ">   
                           
        <h2>It's Time to Feel <br> Whole.</h2>
        <h3>Becoming a national leader in health care takes more than medical expertise and advanced technology. It takes heart. Lots of heart. With more than 80,000 highly skilled professionals dedicated to delivering exceptional care with uncommon compassion.</h3>

    </div>
    
</header>


    <link rel="stylesheet" type="text/css" href="responsive_service.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> 
    
    <meta name="viewport"  content="width=device-width,initial-scale=1.0">
    <body>
    <div class="services1">
        <h1>Our Services</h1> 
        <div class="cen">
       
          <?php while ( $services = mysqli_fetch_assoc($query_result)) { ?>
               <div class="inner_services">
        <?php
        echo'<img src="data:image/png;base64,'.base64_encode( $services['photo'] ).'" />';
        ?>
        <br>
     <h2><?php echo $services['title'];?> </h2>
     <p><?php echo $services['content'];?></p>
      </div>
     <?php }?>
       
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
        <img src="images/index-pic/location2.png"><p id="Contact-Content">PO Box 54321 Some str. 765, Los Angeles, California, United States</p>
        <img src="images/index-pic/telephone1.png"><p id="Contact-Content">+12 345 678 9123</p>
        <img src="images/index-pic/info.png"><a href="#" id="Contact-Link">info@company.com</a>
      </div>
    </div>
  </div>
</div>


</body>