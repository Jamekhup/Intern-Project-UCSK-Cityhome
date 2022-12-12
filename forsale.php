<!DOCTYPE html>
<html lang="en">
<head>
<?php 
  include('pages/head.php'); 
  if (isset($_GET['salecat'])) {
      require_once('cityhome-admin/db.php');

      $saleName = $_GET['salecat'];

      $sql = "SELECT * FROM for_sale WHERE category_name = '$saleName' ORDER BY id DESC LIMIT 6";
      $saleQ = mysqli_query($dbcon,$sql);
    }
?>

<title><?php echo $saleName; ?> for sale lists in Yangon Myanmar - City Home Property Real Estate Co.,ltd</title>

  
</head>
<body>
<!--navar-->
<?php include('pages/nav.php'); ?>
<br> 
<div class="container mycard" >
<div class="row" id="postappend">
  <div class="container mycard">
       <h4 > <i class="fas fa-house-user" style="font-size: 30px;"></i>&nbsp;&nbsp;<b>ရောင်းရန်ရှိသော <?php echo $saleName;?> &nbsp;များ</b></h4><hr>
  </div>
<?php while($sale = mysqli_fetch_assoc($saleQ)){
?>
<div class="col-md-4">

  
<div style="background-image: url('cityhome-admin/sale/<?php echo $sale['img1']; ?>'); height: 200px; background-size: cover;">  
</div> 
    <div class="card-body">
      <h4 class="center">‌<?php echo $sale['address']; ?> </h4><br>

    <p> 
      <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Township - <?php echo $sale['township']; ?><br>
      <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Room - <?php echo $sale['room']; ?><br>
      <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Price - <?php echo $sale['price']; ?><br>
      <i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;Feet - <?php echo $sale['feet']; ?><br> 
    </p>

      <a href="saledetail.php?forsaleId=<?php echo $sale['id']; ?>" class="btn btn-info"><b>View Details</b></a>

      <hr>
    <div class="post">
        <i class="far fa-clock"></i>&nbsp;&nbsp;Posted Date:  <?php echo date('d/M/Y',strtotime($sale['created'])); ?> <i class="far fa-clock"></i>
    </div>
  
   </div>
  </div>


      <?php 
            $postid = $sale['id'];
            $catname = $sale['category_name'];

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
      url:"fetch_sale.php",
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