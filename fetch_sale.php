<?php
error_reporting(0);
require_once("cityhome-admin/db.php");
$output='';
sleep(1);

$getId= $_POST["lastid"];
$getName= $_POST["catname"];

$select="SELECT * FROM for_sale WHERE id < ".$getId." AND category_name='$getName' ORDER BY id DESC LIMIT 6";
$result=mysqli_query($dbcon,$select);
if (mysqli_num_rows($result)>0) {
while ($sale=mysqli_fetch_assoc($result)) {

$output .='

<div class="col-md-4 show_sale">



  <img src="cityhome-admin/sale/'.$sale["img2"].'" class="card-img-top" alt="..." style="height: 200px; background-size: cover;">


        <div class="card-body">
              <h4 class="center">'.$sale["address"].'</h4><br>
          
            <i class="fas fa-map-marker-alt"></i> &nbsp; Township&nbsp; :&nbsp '.$sale["township"].'</li><br>
            <i class="fas fa-map-marker-alt"></i> &nbsp; Room&nbsp; :&nbsp '.$sale["room"].'</li><br>
           <i class="fas fa-map-marker-alt"></i> &nbsp; Price&nbsp; :&nbsp '.$sale["price"].'</li><br>
            <i class="fas fa-map-marker-alt"></i> &nbsp; Feet&nbsp; :&nbsp '.$sale["feet"].'</li><br> <br> 
          
            <a href="saledetail.php?forsaleId='.$sale["id"].'" class="btn btn-info"><b>View Details</b></a>


          
     	</div>
</div>



';
$postid = $sale['id'];
$catname = $sale['category_name'];
}


$output .='
<div class="container">
  <div id="remove" class="text-center">

  <button name="morepost" id="morepost" data-catname="'.$catname.'" data-postid="'.$postid.'" class="btn btn-primary">....Load More....</button>
</div>
</div>
';



}else{
$output .='
<div class="container" id="remove">
<div class="text-center">
<button name="morepost" class="btn btn-primary">No More Post</button>
</div>
</div>
';
}

echo $output;
?>