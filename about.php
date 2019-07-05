<?php
   
    require 'class/About.php';
    $obj_view = new About();
    $query_result = $obj_view->select_all_about();

   
    $query_result2 = $obj_view->select_all_sherbimet_about();

  
    $query_result3 = $obj_view->select_all_content_about();

  
    $query_result4 = $obj_view->select_all_gallery_about();
  
?>
<head>
<style>
section#sherbimet{
  display: flex;

}

.sherbimet-list{
  margin-right: 20px;
}
.images img {
    height: 250px;
    width: 250px;
    margin-left: 8px;
    margin-bottom: 7px;
}

</style>
<link rel="stylesheet" type="text/css" href="aboutstylesheet.css">
   <link rel="stylesheet" type="text/css" href="style.css">
   <!--Shkronjat-->
       <link href="https://fonts.googleapis.com/css?family=Cinzel:700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:100,300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Sonsie+One&display=swap" rel="stylesheet">
</head>


<ul class="ul-list">
  <li class="li-list" id="sm">Smart Med</li>
  <li class="li-list"><a  href="index.php">Home</a></li>
  <li class="li-list"><a href="gallery.php">Gallery</a></li>
  <li class="li-list"><a  class="active" href="about.php">About</a></li>
  <li class="li-list"><a  href="contact.php">Contact</a></li>
</ul>
<div id="large_image">
  <div class="wrap white">
  <section id="hello">
     <?php if ( $about = mysqli_fetch_assoc($query_result)) { ?>
     <h1><?php echo $about['title'];?> </h1>
     <?php echo $about['content'];?>
     <?php }?>
 
   </section>
  
</div>
  
  
</div>

<div class="wrap">
  <section id="work">
       <?php if ( $content_about = mysqli_fetch_assoc($query_result3)) { ?>
    
  
    <h1><?php echo $content_about['titulli'];?> </h1>
    <h2><?php echo $content_about['paragrafi'];?></h2>
    <p><?php echo $content_about['content'];?></p>
       <?php }?>
    <div class="images">

         <?php while ( $about_gallery = mysqli_fetch_assoc($query_result4)) { 
      
  echo'<img src="data:image/jpg;base64,'.base64_encode( $about_gallery['foto'] ).'"/>';
   
  }?>

    
    </div>
  </section>
  
</div>


<div class="wrap">
    <h1>Disa nga sherbimet e ofruara</h1>
  <section id="sherbimet">
    
  
    
    <?php while ( $sherbimet_about = mysqli_fetch_assoc($query_result2)) { ?>
 
      
    <div class="sherbimet-list">
        
     
      <p><?php echo $sherbimet_about['titulli'];?>  </p>
      <p><?php echo $sherbimet_about['content'];?>  </p>
    </div>
  
  <?php } ?>
  </div>

</div>
<!--End Pattern HTML-->


    
   </section>
  
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


</section>

