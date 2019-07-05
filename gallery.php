<?php
   
    require 'class/Gallery.php';
    $obj_view = new Gallery();
    $query_result = $obj_view->select_all_gallery_info();
?>

<header>
     <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="stylegallery.css">
 
      
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
  <li class="li-list"><a class="active" href="gallery.php">Gallery</a></li>
  <li class="li-list"><a href="about.php">About</a></li>
  <li class="li-list"><a href="contact.php">Contact</a></li>
</ul>
</header>
<link rel="stylesheet" href="gallery.css">

<div class="fotot"> 
  
  <!-- Photo grid -->
  <?php while ( $tbl_gallery = mysqli_fetch_assoc($query_result)) { ?>
 
      
    <div class="db-photos">
        
      <img src="admin/<?php echo $tbl_gallery['gallery_image']; ?>" style="width:100%"  alt="Canoeing again">
      <p><?php echo $tbl_gallery['image_title'];?>  </p>
    
    </div>
  
  <?php } ?>
  </div>
  
 
<?php
    include 'includes/footer.php';
?>

</body></html>

