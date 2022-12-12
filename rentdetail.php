<!DOCTYPE HTML>
<html lang="en">

<head>
  <?php 
    include('pages/head.php'); 
    require_once('cityhome-admin/db.php');


    if (isset($_GET['forrentId'])) {
      require_once('cityhome-admin/db.php');

      $id = $_GET['forrentId'];

      $sql = "SELECT * FROM for_rent WHERE id='$id' LIMIT 1";
      $myDetail = mysqli_query($dbcon,$sql);

      $value = mysqli_fetch_assoc($myDetail);

      $address = $value['address'];
      $township = $value['township'];
      $price = $value['price'];
      $room = $value['room'];
      $feet = $value['feet'];
      $des = $value['description'];
      $img1 = $value['img1'];
      $img2 = $value['img2'];
      $img3 = $value['img3'];
      $img4 = $value['img4'];
      $img5 = $value['img5'];
      $img6 = $value['img6'];
      $img7 = $value['img7'];
      $category_name = $value['category_name'];
      $sold = $value['sold'];

    }

  ?>
  <title>Property for rent in <?php echo $township; ?> - City Home Propert Co.,ltd</title>

  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

  <!-- Demo styles -->
<style>
  
  
 /*@media only screen and (max-width: 600px) {
       .gallery-top {
                      height: 60%;
                      width: 80%!important;

                    }

    .gallery-thumbs {
                      height: 20% !important;
                      width: 80%!important;
                      box-sizing: border-box;
                      padding: 10px 0;
                    }

       .mycard1{
                    width:auto!important;
                    margin-left: 5% !important;
                     margin-right:  5% !important;
                  }
              

    }

    html,
    body {

      position: relative;
      height: 100%;
    }

  body {
      background:none;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
   
              }
   .swiper-container {
      width: 60%;
      height: 60px;
      margin-left: auto;
      margin-right: auto;
    }

    .swiper-slide {

      background-size: cover;
      background-position: center;
    }

    .gallery-top {
      height: 50%;
      width: 60%;

    }

    .gallery-thumbs {
      height: 30%;
      width: 820;
      box-sizing: border-box;
      padding: 10px 0;
    }

    .gallery-thumbs .swiper-slide {
      height: 100%;
      opacity: 0.4;
    }

    .gallery-thumbs .swiper-slide-thumb-active {
      opacity: 1;
    }
*/

  </style> 
</head>

<body>
  <!--navar-->
<?php include('pages/nav.php'); ?>
<br>


<!-- Swiper -->
  <div class="swiper-container gallery-top">
    <div class="swiper-wrapper">


      <div class="swiper-slide" style="background-image:url('cityhome-admin/rent/<?php echo $img1; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/rent/<?php echo $img2; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/rent/<?php echo $img3; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/rent/<?php echo $img4; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/rent/<?php echo $img5; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/rent/<?php echo $img6; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/rent/<?php echo $img7; ?>')"></div>

    </div>
    <!-- Add Arrows -->
   
    <div class="swiper-button-next swiper-button-white"></div>
    <div class="swiper-button-prev swiper-button-white"></div>
  </div>
    
   
   <div class="swiper-container gallery-thumbs">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url('cityhome-admin/rent/<?php echo $img1; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/rent/<?php echo $img2; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/rent/<?php echo $img3; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/rent/<?php echo $img4; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/rent/<?php echo $img5; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/rent/<?php echo $img6; ?>')"></div>
      <div class="swiper-slide" style="background-image:url('cityhome-admin/rent/<?php echo $img7; ?>')"></div>

    </div>
  </div>

      <div class="container"  id="mysiz">
        <div class="col-md-8 offset-md-2">
       <div class="card-deck">
        <div class="card">
        <div class="card-body">
        <h4 class="center"><?php echo $address; ?></h4>
       <hr color="green">
           <div class="row">
             <div class="col-md-6">
               <p> 
            
                <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Township - <?php echo $township; ?> ks<br>
                
                <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Price - <?php echo $price; ?><br>
              
                <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Room - <?php echo $room; ?><br>
              </p>
             </div>
             <div class="col-md-6">
               <p> 
            
                <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Feet - <?php echo $feet; ?><br>
                <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;<?php echo $category_name; ?><br>
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
      <br>

      </div>
  
 
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