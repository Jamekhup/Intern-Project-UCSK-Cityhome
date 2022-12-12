<?php  

  session_start();

  if (empty($_SESSION['admin_id'])) {
    header('location:index.php');
  }

  if (isset($_GET['id'])) {
    require('db.php');
    $edit_id = $_GET['id'];


    $sql = "SELECT * FROM project WHERE id='$edit_id'";
    $connect= mysqli_query($dbcon,$sql);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php include('pages/head.php'); ?>
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <?php include('pages/nav.php'); ?>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <?php include('pages/aside.php'); ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="form-group row">
          <div class="col-sm-6 offset-sm-4">
            <h1 class="m-0 text-dark">Edit Data For Project</h1>
          </div><!-- /.col -->
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Edit Project</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->

      <!-- /.container-fluid -->
    </div>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
      <!-- Horizontal Form -->
            <div class="card card-info col-lg-8 offset-lg-2">
              <!-- form start -->
              <form class="form-horizontal" action="process/updateProject.php" method="POST" enctype="multipart/form-data">
              <?php  
                while($edit = mysqli_fetch_assoc($connect)){
              ?>
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputAdress" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputAddress" value="<?php echo $edit['address']; ?>" name="address">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputTownship" class="col-sm-2 col-form-label">Township</label>
                    <div class="col-sm-10">
                       <select class="form-control" id="exampleFormControlSelect1" name="township">
                        <option value="kyauktada">ကျောက်တံတားမြို့နယ်</option>
                        <option value="papedan">ပန်းပဲတန်းမြို့နယ်</option>
                        <option value="latha">လသာမြို့နယ်</option>
                        <option value="lanmadaw">လမ်းမတော်မြို့နယ်</option>
                        <option value="alone">အလုံမြို့နယ်</option>
                        <option value="sanchaung">စမ်းချောင်းမြို့နယ်</option>
                        <option value="botathaung">ဗိုလ်တစ်ထောင်မြို့နယ်</option>
                        <option value="pazundaung">ပုဇွန်တောင်မြို့နယ်</option>
                        <option value="Hlaing">လှိုင်မြို့နယ်</option>
                        <option value="mingala-taung-nyunt">မင်္ဂလာတောင်ညွှန့်မြို့နယ်</option>
                        <option value="dawpone">ဒေါပုံမြို့နယ်</option>
                        <option value="kyimyindaing">ကြည့်မြင်တိုင်မြို့နယ်</option>
                        <option value="thaketa">သာကေတမြို့နယ်</option>
                        <option value="kamayut">ကမာရွက်မြို့နယ်</option>
                        <option value="mayangon">မရမ်းကုန်းမြို့နယ်</option>
                        <option value="tamwe">တာမွေမြို့နယ်</option>
                        <option value="bahan">ဗဟန်းမြို့နယ်</option>
                        <option value="yankin">ရန်ကင်းမြို့နယ်</option>
                        <option value="thuwana">သု၀ဏမြို့နယ်</option>
                        <option value="thingangyun">သင်္ကန်းကျွန်းမြို့နယ်</option>
                        <option value="north Okkalapa">မြောက်ဉက္ကလာမြို့နယ်</option>
                        <option value="south Okkalapa">တောင်ဉက္ကလာမြို့နယ်</option>
                        <option value="insein">အင်းစိန်မြို့နယ်</option>
                        <option value="new dagon south">တောင်ဒဂုံမြို့နယ်</option>
                        <option value="new dagon north">မြောက်ဒဂုံမြို့နယ်</option>
                        <option value="new dagon east">အရှေ့ဒဂုံမြို့နယ်</option>
                        <option value="shwepyitha">ရွှေပြည်သာမြို့နယ်</option>
                        <option value="hlaingthaya">လှိုင်သာယာမြို့နယ်</option>
                        <option value="htaukk yant">ထောက်ကြန့်မြို့နယ်</option>
                        <option value="mingaladon">မင်္ဂလာဒုံမြို့နယ်</option>
                        <option value="pale">ပုလဲမြို့နယ်</option>
                        <option value="thanlyin">သန်လျှင်မြို့နယ်</option>
                        <option value="yuzana">ယုဇနမြို့နယ်</option>
                        <option value="hlegu">လှည်းကူးမြို့နယ်</option>
                        <option value="hmawbi">မှော်ဘီမြို့နယ်</option>
                        <option value="dala">ဒလမြို့နယ်</option>
                      </select>
                    </div>
                  </div> 
                  
                   <div class="form-group row">
                    <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPrice" value="<?php echo $edit['price']; ?>" name="price">
                    </div>
                  </div>
                   
                   <div class="form-group row">
                    <label for="inputFeet" class="col-sm-2 col-form-label">Feet</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputFeet" value="<?php echo $edit['feet']; ?>" name="feet">
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="inputFeet" class="col-sm-2 col-form-label">description</label>
                    <div class="col-sm-10">
                      <textarea style="height: 200px;" class="form-control" name="description"><?php echo $edit['description']; ?></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image1</label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="img1" value="<?php echo $edit['image1']; ?>">
                        <label class="custom-file-label" for="image1">Choose image</label>
                      </div>
                    </div>
                    </div>  
                  </div>

                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image2</label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="img2" value="<?php echo $edit['image2']; ?>">
                        <label class="custom-file-label" for="image2">Choose image</label>
                      </div>
                    </div>
                    </div>  
                  </div>

                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image3</label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="img3" value="<?php echo $edit['image3']; ?>">
                        <label class="custom-file-label" for="image3">Choose image</label>
                      </div>
                    </div>
                    </div>  
                  </div>

                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image4</label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="img4" value="<?php echo $edit['image4']; ?>">
                        <label class="custom-file-label" for="image4">Choose image</label>
                      </div>
                    </div>
                    </div>  
                  </div>

                   <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image5</label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="img5" value="<?php echo $edit['image5']; ?>">
                        <label class="custom-file-label" for="image5">Choose image</label>
                      </div>
                    </div>
                    </div>  
                  </div>

                   <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image6</label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="img6" value="<?php echo $edit['image6']; ?>">
                        <label class="custom-file-label" for="image6">Choose image</label>
                      </div>
                    </div>
                    </div>  
                  </div>

                   <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image7</label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="img7" value="<?php echo $edit['image7']; ?>">
                        <label class="custom-file-label" for="image7">Choose image</label>
                      </div>
                    </div>
                    </div>  
                  </div>

                </div>
                  <input type="hidden" value="<?php echo $edit['id']; ?>" name="update_id">
              <?php
                }
              ?>
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="" class="col-sm-2 btn float-right" style="background-color: lightgrey;">Cancel</a>
                  <button type="submit" name="update" class="col-sm-2 btn float-left" style="background-color: #39d8dd; color: white;">
                    Update
                  </button>
                </div>
                <!-- /.card-footer -->
              </form>
            </div>     
            <!-- /.card -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <?php include('pages/footer.php'); ?>
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
</body>
</html>
