<!DOCTYPE html>
<html lang="en">
<head>
  <?php 

    include('pages/head.php'); 
      require_once('cityhome-admin/db.php');

      $sql = "SELECT * FROM project ORDER BY id DESC LIMIT 4";
      $projectQ = mysqli_query($dbcon,$sql);

    

  ?>
  <title>Upcoming project properties in Yangon, Myanmar - City Home Property Co.,ltd</title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>

<!--navar-->
<?php include('pages/nav.php'); ?>


 <br>

<div class="container mycard">
    <div>
 <h4 > <i class="fas fa-house-user" style="font-size: 30px;"></i>&nbsp;&nbsp;<b><Sale> စီမံကိန်းများ</Sale></b></h4>
<hr>
</div>
 

 </div>

  <br>
<div class="container">

  <div class="row" id="postappend">
   
    <?php while($upProject = mysqli_fetch_assoc($projectQ)){
    ?>
      <div class="col-md-6">
      <div class="container">
        <div class="card">
          <div class="shadow-lg p-1 mb-1 bg-white rounded">
            <div class="row">
                      <!-- one -->
              <div class="col-md-6">
                <div class="abc" style="background-image: url('cityhome-admin/project/<?php echo $upProject['img1']; ?>'); height: 100%; background-size: cover;">
                  
                </div>
                            
                </div><br><br>

                <div class="col-md-6">
                  <div class="pclr">
                    <h5 ><?php echo $upProject['address']; ?></h5>
                    
                    <i class="fas fa-map-marker-alt">&nbsp;Township - </i>&nbsp;&nbsp;&nbsp;<?php echo $upProject['township']; ?>

                    <br>

                    <i class="fas fa-map-marker-alt">&nbsp;Price - </i>&nbsp;&nbsp;&nbsp;<?php echo $upProject['price']; ?>

                    <br>

                    <i class="fas fa-map-marker-alt">&nbsp;Feet - </i>&nbsp;&nbsp;&nbsp;<?php echo $upProject['feet']; ?>

                    <br>
                      
                  </div>
                    <br>

                  <div class="post">
                      <i class="far fa-clock"></i>&nbsp;&nbsp;Posted Date:  <?php echo date('d/M/Y',strtotime($upProject['created'])); ?> <i class="far fa-clock"></i>
                  </div>

                  <br>
                </div>

                       <!-- for btn -->
                <div class="container">
                  <div class="app">         
                    <div class="col-md-12">
                                     
                      <div class="spa"> 
                        <a href="pjdetail.php?projectId=<?php echo $upProject['id']; ?>" class="btn btn-info"><b>View Details</b></a>
                                   
                      </div>
                    </div>

                  </div>
                </div>
                     
              </div>
            </div>
          </div>
        </div>
        <br>
      </div> 

          <?php 
                $postid = $upProject['id'];
                

           ?>
    <?php
    } ?>
  </div>
        
  </div>
 


 <div class="container" id="remove">
   <div  class="more-post text-center">
    <button name="morepost" id="morepost" data-postid="<?php echo $postid; ?>" class="btn btn-primary" style="text-align: center;">....Load More....</button>   
  </div>
 </div>

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
    $('#morepost').html("loading....");

    $.ajax({
      url:"fetch_project.php",
      method:"POST",
      dataType:"text",
      data:{lastid:loadmore},
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