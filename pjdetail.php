<!DOCTYPE html>
<html lang="en">
<head>

   <?php 

    include('pages/head.php'); 
    require_once('cityhome-admin/db.php');


    if (isset($_GET['projectId'])) {
      require_once('cityhome-admin/db.php');

      $id = $_GET['projectId'];

      $sql = "SELECT * FROM project WHERE id='$id' LIMIT 1";
      $myDetail = mysqli_query($dbcon,$sql);

      $value = mysqli_fetch_assoc($myDetail);

      $address = $value['address'];
      $township = $value['township'];
      $price = $value['price'];
      $room = $value['room'];
      $des = $value['description'];
      $sold = $value['sold'];
      $feet = $value['feet'];
      $img1 = $value['img1'];
      $img2 = $value['img2'];
      $img3 = $value['img3'];
      $img4 = $value['img4'];
      $img5 = $value['img5'];
      $img6 = $value['img6'];
      $img7 = $value['img7'];
     

    }



  ?>
  <title>Upcoming Project properties in <?php echo $township; ?> - City Home Propert Co.,ltd</title>
 
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  

  <!-- Demo styles -->
  
     

</head>

<body>
  <!--navar-->
<?php include('pages/nav.php'); ?>
<br>

  <!-- Swiper -->
  <div class="swiper-container gallery-top">
    <div class="swiper-wrapper">


      <div class="swiper-slide" style="background-image:url('cityhome-admin/project/<?php echo $img1; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/project/<?php echo $img2; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/project/<?php echo $img3; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/project/<?php echo $img4; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/project/<?php echo $img5; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/project/<?php echo $img6; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/project/<?php echo $img7; ?>')"></div>


     
    </div>
    <!-- Add Arrows -->
   
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>


<div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url('cityhome-admin/project/<?php echo $img1; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/project/<?php echo $img2; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/project/<?php echo $img3; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/project/<?php echo $img4; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/project/<?php echo $img5; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/project/<?php echo $img6; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/project/<?php echo $img7; ?>')"></div>

    </div>
  </div>
  
  <div class="container" id="mysiz">
        <div class="col-md-8 offset-md-2">
    
       <div class="card-deck">

        
        <div class="card">
        <div class="card-body">
        <h4 class="center"><?php echo $address; ?></h4>
       <hr color="green">
           <div class="row">
             <div class="col-md-6">
               <p> 
            
                <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Township - <?php echo $township; ?> <br>
                
                <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Price - <?php echo $price; ?> ks<br>

              </p>
             </div>
             <div class="col-md-6">
               <p> 

                <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Room - <?php echo $value['room']; ?><br>
              
                <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Feet - <?php echo $feet; ?><br>
                
               
              </p>
             </div>
           </div>

            <div id="des">
              <h5>Description</h5>
              <p><?php echo $des;  ?></p>
            </div>

            <div class="call-sold">
            <a href="tel:+959409789556" class="btn btn-primary float-left btn-sm call-now">Call Now</a>
            <?php  
              if ($sold == 1) {
            ?>
              <button class="btn btn-danger btn-sm sold-out float-right">This item is sold out</button>
            <?php
              }
            ?>
          </div>

          <div style="clear:both;"></div>
         
         <hr>

        <div class="post">
            <i class="far fa-clock"></i>&nbsp;&nbsp;Posted Date:  <?php echo date('d/M/Y',strtotime($value['created'])); ?> <i class="far fa-clock"></i>
         </div>
         
        </div>

      </div>

      </div> 
      <br>
      <button onclick="window.history.back()" class="goback btn btn-info btn-block"><b>Go Back</b></button>
      </div>
      
      </div>
      </div>
   
 <br>
  <!-- Swiper JS -->
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 4,
      loop: true,
      freeMode: true,
      loopedSlides: 5, //looped slides should be the same
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 10,
      loop: true,
      loopedSlides: 5, //looped slides should be the same
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      thumbs: {
        swiper: galleryThumbs,
      },
    });
  </script>

  <!-- footer -->
<?php include('pages/footer.php'); ?>
</body>

</html>