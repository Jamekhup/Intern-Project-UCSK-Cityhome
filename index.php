<!DOCTYPE html>
<html>
<head>
  <title>Real Estate Co.,lt in Yangon,Myanmar - City Home Property</title>
  <meta name="description" content="Are you looking for real estate service in Yangon, Myanmar to buy or rent apartment, condo, private house, land and warehouse? We are all here for you. Contact us now.">
  <?php include('pages/head.php'); 
     require_once('cityhome-admin/db.php');


  $saleSql= "SELECT * FROM for_sale ORDER BY id DESC LIMIT 4";
  $mysale = mysqli_query($dbcon,$saleSql);


  $saleSql= "SELECT * FROM for_sale ORDER BY id DESC  LIMIT 4";
  $mysale = mysqli_query($dbcon,$saleSql);



  //$get_sale = "SELECT * FROM forsale";

  //$connect_sale = mysqli_query($dbcon,$get_sale);

   $rentSql= "SELECT * FROM for_rent ORDER BY id DESC LIMIT 4";
   $myrent = mysqli_query($dbcon,$rentSql);

  //$get_rent = "SELECT * FROM forrent";

  //$connect_rent = mysqli_query($dbcon,$get_rent);
   $projectSql= "SELECT * FROM project ORDER BY id DESC LIMIT 4";
   $myproject = mysqli_query($dbcon,$projectSql);


  ?>  
</head>

<body>

<!--navar-->
<?php include('pages/nav.php'); ?>

 <div class="search-bg">
    <div class="container">
<!-- <h3 class="text-center" style="color: white;">Welcome to City Home Property Real Estimate</h3>
 -->    
 <div class="container">
  <form method="post" action="search.php">
  <div class="row">
    <div class="col-md-4" id="tomar1" >
      <ul class="list-group" id="sResult">
    
      </ul>
      <!-- <"custom-select">မြို့နယ်ရွေးချယ်ရန်-->
        <select class="form-control" id="select" name="town">
          <option value="">-Choose Township-</option>

            <option value="Alone">Ahlone</option>
       		<option value="Bahan">Bahan</option>
       		<option value="Botathaung">Botataung</option>
       		<option value="Dawpone">Dawbon</option>
       		<option value="New Dagon South">Dagon Myothit (South)</option>
              <option value="New Dagon North">Dagon Myothit (North)</option>
              <option value="New Dagon East">Dagon Myothit (east)</option>
       		<option value="Dala">Dala</option>
       		<option value="Hlaingthaya">Hlaingthaya</option>
             <option value="Htaukk Yant">Htuakk Gyiant</option>
             <option value="Hlegu">Hlegu</option>
             <option value="Hlaing">Hlaing</option>
             
              <option value="Hmawbi">Hmawbi</option>
              <option value="Insein">Insein</option>
       		<option value="Kyauktada">Kyauktada</option>
       		<option value="Kamayut">Kamaryut</option>
       		<option value="Kyimyindaing">Kyeemyindaing</option>
       		<option value="Latha">Latha</option>
              <option value="Lanmadaw">Lanmadaw</option>
              <option value="Mingala-Taung-Nyunt">Mingalar Taungnyunt</option>
              <option value="Mingaladon">Mingaladon</option>
              <option value="Mayangon">Mayangone</option>
              <option value="North Okkalapa">North Okkalapa</option>
              <option value="Papedan">Pabedan</option>
              <option value="Pazundaung">Pazundaung</option>
              <option value="Pale">Pale</option>
              <option value="Sanchaung">Sanchaung</option>
              
              <option value="Shwepyitha">Shwepyitha</option>
              <option value="South Okkalapa">South Okkalapa</option>
              
              
              <option value="Thaketa">Thaketa</option>
              
               <option value="Thuwana">Tuwana</option>
              <option value="Thingangyun">Thingangyun</option>
              <option value="Tamwe">Tamwe</option>
              <option value="Thanlyin">Thanlyin</option>
              
              <option value="Yankin">Yankin</option>
                    
              <option value="Yuzana">Yuzana</option>


        </select>
        <?php 
          if(isset($_POST['searchdeals'])){
            $valueToSearch = $_POST['tomar2'];
            $sql = "SELECT * FROM for_sale, for_rent, project WHERE township LIKE'".$valueToSearch."%'";
          }
         ?>
    </div>

    <div class="col-md-4" id="tomar2">
      
    <!--"select" class="buy">ဝယ်ရန်/ငှားရန်-->
          <select class="form-control" id="sr" name="choose">
            <option value="">-Sale or Rent-</option>
          <option value="sale">Sale</option>
          <option value= "rent">Rent</option>
          
        </select>
    </div>
    <div class="col-md-4" id="tomar2">
        <select class="form-control" id="cp" name="choosePrice" disabled="">
            <option value="">-Choose Preferred Price-</option>
         
          
        </select>
    </div>

  </div>
  </div>
  <br>
<div class="sBtn">
    <button type="submit"  class="btn btn-primary" id="mbtn" placeholder="Search by Title" class="form-control" name="search" autocomplete="off" value="search">Search</button>
</div>
 
</form>
     
    </div>
</div>

 


<div style="background-color: #eee;" id="welcome">
 
  <h1 class ="text-center">Welcome to City Home Property Real Estate</h1>
  <p class="text-center">Hello everyone and welcome to City Home Property Real Estate Company </p>
  <p class="text-center">We are very happy to see you. We all eagerly wait for this time of the year to have you among us. Welcome to our Real Estate Services in Yangon, Myanmar. Tell us what you needs and we will provide the best services, you will be delight in our services. You are one of our most favorite people</p>
  <p class="text-center">GOD blessed you abundantly</p>
 
</div>

<br>
  
    <div class="container mycard">
    <div>
    <h4 > <i class="fas fa-house-user" style="font-size: 30px;"></i>&nbsp;&nbsp;<b>Properties For Sale</b></h4>

    </div>
    <hr>
    <div class="card-deck">

        <?php while($value = mysqli_fetch_assoc($mysale)){
        ?>

        <div class="card">
        <div style="background-image: url('cityhome-admin/sale/<?php echo $value['img1']; ?>'); height: 200px; background-size: cover;"></div>
        <div class="card-body">
        <h4 class="center"><?php echo $value['address']; ?></h4>
       <hr color="green">
           <p> 
            <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Township - <?php echo $value['township']; ?> <br>
            
            <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Price - <?php echo $value['price']; ?><br>
          
            <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Room - <?php echo $value['room']; ?><br>
            <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Feet - <?php echo $value['feet']; ?><br>
            <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;<?php echo $value['category_name']; ?><br>
           
          </p>
          <a href="saledetail.php?forsaleId=<?php echo $value['id']; ?>" class="btn btn-info"><b>View Details</b></a>
         <hr>

        
         <div class="post">
            <i class="far fa-clock"></i>&nbsp;&nbsp;Posted Date:  <?php echo date('d/M/Y',strtotime($value['created'])); ?> <i class="far fa-clock"></i>
         </div>
        </div>

      </div>
      

     <?php
       } ?>


      </div>  

      </div>


<br><br>
 
  <div class="w-100 p-3"  id="middle">
  <h2 class ="text-center"><q>Let Us Guide To Your New Home</q></h2>
</div>
<br>
 <div class="container mycard">
  <div>
 <h4 > <i class="fas fa-house-user" style="font-size: 30px;"></i>&nbsp;&nbsp;<b>Upcoming Projects</b></h4>

</div>
 <hr>
    <div class="card-deck">

        <?php while($value = mysqli_fetch_assoc($myproject)){
        ?>

        <div class="card">
        <div style="background-image: url('cityhome-admin/project/<?php echo $value['img1']; ?>'); height: 200px; background-size: cover;"></div>
        <div class="card-body">
        <h4 class="center"><?php echo $value['address']; ?></h4>
       <hr color="green">
           <p> 
            <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Township - <?php echo $value['township']; ?> <br>
            
            <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Price - <?php echo $value['price']; ?><br>

            <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Room - <?php echo $value['room']; ?><br>
          
            <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Feet - <?php echo $value['feet']; ?><br>
           
          </p>
          <a href="pjdetail.php?projectId=<?php echo $value['id']; ?>" class="btn btn-info"><b>View Details</b></a>
         <hr>

        
         <div class="post">
            <i class="far fa-clock"></i>&nbsp;&nbsp;Posted Date:  <?php echo date('d/M/Y',strtotime($value['created'])); ?> <i class="far fa-clock"></i>
         </div>
        </div>

      </div>    

     <?php
       } ?>
      </div> 
  </div>

<br><br>



<!--for rent img-->
<br>
     <div class="container mycard">
     <div>
      <h4 > <i class="fas fa-house-user" style="font-size: 30px;"></i>&nbsp;&nbsp;<b>Properties For Rent</b></h4>

    </div>
<hr>
   <div class="card-deck">

        <?php while($value = mysqli_fetch_assoc($myrent)){
        ?>

        <div class="card">
        <div style="background-image: url('cityhome-admin/rent/<?php echo $value['img1']; ?>'); height: 200px; background-size: cover;"></div>
        <div class="card-body">
        <h4 class="center"><?php echo $value['address']; ?></h4>
       <hr color="green">
           <p> 
            <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Township - <?php echo $value['township']; ?> <br>
            
            <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Price - <?php echo $value['price']; ?> <br>
          
            <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Room - <?php echo $value['room']; ?><br>
            <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Feet - <?php echo $value['feet']; ?><br>
            <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;<?php echo $value['category_name']; ?><br>
           
          </p>
          <a href="rentdetail.php?forrentId=<?php echo $value['id']; ?>" class="btn btn-info"><b>View Details</b></a>
         <hr>        
         <div class="post">
            <i class="far fa-clock"></i>&nbsp;&nbsp;Posted Date:  <?php echo date('d/M/Y',strtotime($value['created'])); ?> <i class="far fa-clock"></i>
         </div>
        </div>

      </div>
      

     <?php
       } ?>


      </div>  
  </div>


<br>
<br>



<!-- footer -->
<?php include('pages/footer.php'); ?>



</body>
</html>