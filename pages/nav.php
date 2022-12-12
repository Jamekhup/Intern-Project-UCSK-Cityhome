<?php  
//   session_start();
  require_once('cityhome-admin/db.php');



  $catSql= "SELECT * FROM category ORDER By id DESC";
  $mycat = mysqli_query($dbcon,$catSql);

  $catSql1= "SELECT * FROM category ORDER By id DESC";
  $mycat1 = mysqli_query($dbcon,$catSql1);


?>

<header class="logo">

  

   <div>
      <img src="img/cityhome-logo.png">

<br>

</div>
</header>





  <nav class="navbar navbar-expand-lg navbar-light mynav sticky-top" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
    <ul class="navbar-nav">
    
      <li class="nav-item">
       <a class="nav-link" href="/"><b>Home</b></a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="about.php">
        <b>About</b></a>
      </li>


 <li class="nav-item dropdown">
    
        <a class="nav-link dropdown-toggle" href="condosale.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <b>  For Sale</b>
        </a>
        <strong>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php  
            while($allCat = mysqli_fetch_assoc($mycat)){
          ?>
          <a class="dropdown-item" href="forsale.php?salecat=<?php echo $allCat['name'];  ?>"><?php echo $allCat['name']; ?></a>
          <?php
            }
          ?>
          
        </div>
        </strong>
  </li>
  
  <li class="nav-item dropdown">
    
        <a class="nav-link dropdown-toggle" href="condorent.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         <b> For Rent</b>
        </a>
           <strong>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <?php  
            while($allCat = mysqli_fetch_assoc($mycat1)){
          ?>
          <a class="dropdown-item" href="forrent.php?rentcat=<?php echo $allCat['name'];  ?>"><?php echo $allCat['name']; ?></a>
          <?php
            }
          ?>
          
        </div>
        </strong>
     
 </li>
  <li class="nav-item">
          <a class="nav-link" href="project.php"><b>Upcoming Projects</b></a>
  </li>
  
  <li class="nav-item">
          <a class="nav-link" href="contact.php"><b>Contact</b></a>
  </li>

  </ul>
   </div>

</nav>






  
 


       

        

 


  
