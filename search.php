<?php  
    if (isset($_POST['search'])) {
        
        require_once('cityhome-admin/db.php');

        //get serach value
        $town = $_POST['town'];
        $choose = $_POST['choose'];
        $choosePrice = $_POST['choosePrice'];

        if ($town == "" || $choose == "" || $choosePrice == "") {
            header('location:index.php');
        }else{

            if ($choose == "rent") {
                $sql1 = "SELECT * FROM for_rent WHERE township='$town' OR price LIKE '%".$choosePrice."%' ORDER BY id DESC";
                $query1 = mysqli_query($dbcon,$sql1);
            }else{
                $sql1 = "SELECT * FROM for_sale WHERE township='$town' OR price LIKE '%".$choosePrice."%' ORDER BY id DESC";
                $query1 = mysqli_query($dbcon,$sql1);
            }
        }


    }else{
        header('location:index.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('pages/head.php'); ?>
    <title>Your Search Result</title>
</head>
<body>
    <?php include('pages/nav.php'); ?>

    <div class="container">
        <br>
        
        <h3 class="text-center">Your Search Results</h3>
        <br>
        <div class="row">
            <?php if($query1->num_rows>0) {
            ?>
                <?php  while($result = mysqli_fetch_assoc($query1)){
                ?>
                    <div class="col-md-4">
                        <div style="background-image:url('cityhome-admin/<?php echo $choose; ?>/<?php echo $result['img1']; ?>'); height: 200px; background-size:cover;" ></div>
                        <div class="card-body">
                            <h4 class="center"><?php echo $result['address']; ?></h4>
                        </div>
                        <hr color="green">
                     <p>
                        <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Township - <?php echo $result['township']; ?> <br>
                        <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Price - <?php echo $result['price']; ?> Ks<br>
                        <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Room - <?php echo $result['room']; ?><br>
                        <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;Feet - <?php echo $result['feet']; ?><br>
                        <i class="fas fa-arrow-alt-circle-right"></i>&nbsp;&nbsp;<?php echo $result['category_name']; ?><br>
                     </p>
                     <a href="saledetail.php?forsaleId=<?php echo $result['id']; ?>" class="btn btn-info"><b>View Details</b></a>
                    <hr>
                    <div class="post">
                     <i class="far fa-clock"></i>&nbsp;&nbsp;Posted Date:  <?php echo date('d/M/Y',strtotime($result['created'])); ?> <i class="far fa-clock"></i>
                    </div>

                </div>
                <?php
                }?>
            <?php
            }else{
            ?>
            <div class="col-md-12">
                <h4 class="text-center"><b>Search Not Found</b></h4>
            </div>
            <?php
            } ?>
        </div>            
    </div>
    <br>
    <br>
    <br>
    <br>

    <?php include('pages/footer.php'); ?>
    
</body>
</html>