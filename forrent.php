<!DOCTYPE html>
<html lang="en">
<head>
<?php 
	include('pages/head.php'); 
	if (isset($_GET['rentcat'])) {
      require_once('cityhome-admin/db.php');

      $rentName = $_GET['rentcat'];

      $sql = "SELECT * FROM for_rent WHERE category_name = '$rentName' ORDER BY id DESC LIMIT 6";
      $rentQ = mysqli_query($dbcon,$sql);
    }
?>

<title><?php echo $rentName; ?> for rent lists in Yangon Myanmar - City Home Property Real Estate Co.,ltd</title>

  
</head>
<body>
<!--navar-->
<?php include('pages/nav.php'); ?>
<br> 
<div class="container mycard" >
<div class="row" id="postappend">
  <div class="container mycard">
         <h4> <i class="fas fa-house-user" style="font-size: 30px;"></i>&nbsp;&nbsp;<b>ငှားရန်ရှိသော <?php echo $rentName ;?> &nbsp;များ</b></h4><hr>
  </div>
<?php while($rent = mysqli_fetch_assoc($rentQ)){
?>
<div class="col-md-4">

  
<div style="background-image: url('cityhome-admin/rent/<?php echo $rent['img1']; ?>'); height: 200px; background-size: cover;">  
</div> 
    <div class="card-body">
      <h4 class="center">‌<?php echo $rent['address']; ?> </h4><br>

    <p> 
      <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Township - <?php echo $rent['township']; ?><br>
      <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Room - <?php echo $rent['room']; ?><br>
      <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Price - <?php echo $rent['price']; ?><br>
      <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Feet - <?php echo $rent['feet']; ?><br> 
    </p>

      <a href="rentdetail.php?forrentId=<?php echo $rent['id']; ?>" class="btn btn-info"><b>View Details</b></a>

      <hr>
    <div class="post">
        <i class="far fa-clock"></i>&nbsp;&nbsp;Posted Date:  <?php echo date('d/M/Y',strtotime($rent['created'])); ?> <i class="far fa-clock"></i>
    </div>
  
   </div>
  </div>


      <?php 
            $postid = $rent['id'];
            $catname = $rent['category_name'];

       ?>

<?php
} ?>

</div>
</div>


    <div class="container" id="remove">
      <div  class="more-post text-center">
        <button name="morepost" id="morepost" data-postid="<?php echo $postid; ?>" data-catname="<?php echo $catname; ?>" class="btn btn-primary" style="text-align: center;">....Load More....</button>   
      </div>
    </div>

<br>
<br>
<br>


<!-- footer -->
<?php include('pages/footer.php'); ?>

</body>
</html>

<script>
$(document).ready(function(){
  $(document).on('click',"#morepost", function(){
    var loadmore= $(this).data("postid");
    var cat= $(this).data("catname");
    $('#morepost').html("loading....");

    $.ajax({
      url:"fetch_rent.php",
      method:"POST",
      dataType:"text",
      data:{lastid:loadmore,catname:cat},
      success:function(data){
        if (data !='') {
          $("#remove").remove();
          $("#postappend").append(data);
        }else{
          $("#morepost").html('No More Post..');
        }
      }
    });
  });
});
</script>