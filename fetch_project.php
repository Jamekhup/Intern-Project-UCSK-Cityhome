<?php
error_reporting(0);
require_once("cityhome-admin/db.php");
$output='';
sleep(1);

$getId= $_POST["lastid"];


$select="SELECT * FROM project WHERE id < ".$getId." ORDER BY id DESC LIMIT 4";
$result=mysqli_query($dbcon,$select);
if (mysqli_num_rows($result)>0) {
while ($project=mysqli_fetch_assoc($result)) {

$output .='


// <div class="col-md-4 show_sale">
// 	<img src="cityhome-admin/project/'.$project["img2"].'" class="card-img-top" alt="...">
//         <div class="card-body">
              
//          <ul> 
//             <li class="fas fa-map-marker-alt">&nbsp; Township&nbsp; :&nbsp '.$project["township"].'</li><br>
//             <li class="fas fa-map-marker-alt">&nbsp; Township&nbsp; :&nbsp '.$project["room"].'</li><br>
//           <li class="fas fa-map-marker-alt">&nbsp; Township&nbsp; :&nbsp '.$project["price"].'</li><br>
//             <li class="fas fa-map-marker-alt">&nbsp; Township&nbsp; :&nbsp '.$project["feet"].'</li><br> 
//           </p>
//             <a href="saledetail.php?forsaleId='.$project["id"].'" class="btn btn-info"><b>View Details</b></a>
//          </ul> 
//      	</div>
// </div>

<div class="col-md-6 show_project">

	<div class="container">
        <div class="card">
          <div class="shadow-lg p-1 mb-1 bg-white rounded">
            <div class="row">
                      <!-- one -->
              <div class="col-md-6">
                <img src="cityhome-admin/project/'.$project["img2"].'" class="card-img-top" alt="..." style="height: 200px; background-size: cover;">
                            
                </div><br><br>

                <div class="col-md-6">
                  <div class="pclr">

                    <h5 >'.$project['address'].'</h5>
                    
                    <i class="fas fa-map-marker-alt"></i>&nbsp;Township -&nbsp; '.$project["township"].'

                    <br>

                    <i class="fas fa-map-marker-alt"></i>&nbsp;Price -&nbsp; '.$project["price"].'


                    <br>

                    <i class="fas fa-map-marker-alt"></i>&nbsp;Feet -&nbsp; '.$project["feet"].'

                    <br>
                      
                  </div>
                    <br>

                  <br>
                </div>

                
                <div class="container">
                  <div class="app">         
                    <div class="col-md-12">
                                     
                      <div class="spa"> 
                        <a href="pjdetail.php?projectId='.$project['id'].'" class="btn btn-info"><b>View Details</b></a>
                                   
                      </div>
                    </div>

                  </div>
                </div>
                     
              </div>
            </div>
          </div>
        </div>
</div>
';

$postid = $project['id'];

}

$output .='
<div class="container">
  <div id="remove" class="text-center">

  <button name="morepost" id="morepost" data-postid="'.$postid.'" class="btn btn-primary">....Load More....</button>
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