 <?php  

  session_start();

  if (empty($_SESSION['admin_id'])) {
    header('location:index.php');
  }

  require_once('db.php');
  $get_category = "SELECT * FROM category";

  $connect_cat = mysqli_query($dbcon,$get_category);
  
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
            <h1 class="m-0 text-dark">Add New Data For Project</h1>
          </div><!-- /.col -->
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Project</li>
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
              <?php if (isset($_SESSION['success'])) {
              ?>
                <p class="alert alert-danger text-center">Upload Success!!</p>
              <?php
              unset($_SESSION['success']);
              } ?>
              <!-- form start -->
              <form class="form-horizontal" action="process/createProject.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputAdress" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputAddress" placeholder="Enter address...." name="address">
                    </div>
                  </div>
                <div class="form-group row">
                    <label for="inputTownship" class="col-sm-2 col-form-label">Township</label>
                    <div class="col-sm-10">
                       <select class="form-control" id="exampleFormControlSelect1" name="township">
                        <option value="Kyauktada">ကျောက်တံတားမြို့နယ်</option>
                        <option value="Papedan">ပန်းပဲတန်းမြို့နယ်</option>
                        <option value="Latha">လသာမြို့နယ်</option>
                        <option value="Lanmadaw">လမ်းမတော်မြို့နယ်</option>
                        <option value="Alone">အလုံမြို့နယ်</option>
                        <option value="Sanchaung">စမ်းချောင်းမြို့နယ်</option>
                        <option value="Botathaung">ဗိုလ်တစ်ထောင်မြို့နယ်</option>
                        <option value="Pazundaung">ပုဇွန်တောင်မြို့နယ်</option>
                        <option value="Hlaing">လှိုင်မြို့နယ်</option>
                        <option value="Mingala-Taung-Nyunt">မင်္ဂလာတောင်ညွှန့်မြို့နယ်</option>
                        <option value="Dawpone">ဒေါပုံမြို့နယ်</option>
                        <option value="Kyimyindaing">ကြည့်မြင်တိုင်မြို့နယ်</option>
                        <option value="Thaketa">သာကေတမြို့နယ်</option>
                        <option value="Kamayut">ကမာရွက်မြို့နယ်</option>
                        <option value="Mayangon">မရမ်းကုန်းမြို့နယ်</option>
                        <option value="Tamwe">တာမွေမြို့နယ်</option>
                        <option value="Bahan">ဗဟန်းမြို့နယ်</option>
                        <option value="Yankin">ရန်ကင်းမြို့နယ်</option>
                        <option value="Thuwana">သု၀ဏမြို့နယ်</option>
                        <option value="Thingangyun">သင်္ကန်းကျွန်းမြို့နယ်</option>
                        <option value="North Okkalapa">မြောက်ဉက္ကလာမြို့နယ်</option>
                        <option value="South Okkalapa">တောင်ဉက္ကလာမြို့နယ်</option>
                        <option value="Insein">အင်းစိန်မြို့နယ်</option>
                        <option value="New Dagon South">တောင်ဒဂုံမြို့နယ်</option>
                        <option value="New Dagon North">မြောက်ဒဂုံမြို့နယ်</option>
                        <option value="New Dagon East">အရှေ့ဒဂုံမြို့နယ်</option>
                        <option value="Shwepyitha">ရွှေပြည်သာမြို့နယ်</option>
                        <option value="Hlaingthaya">လှိုင်သာယာမြို့နယ်</option>
                        <option value="Htaukk Yant">ထောက်ကြန့်မြို့နယ်</option>
                        <option value="Mingaladon">မင်္ဂလာဒုံမြို့နယ်</option>
                        <option value="Pale">ပုလဲမြို့နယ်</option>
                        <option value="Thanlyin">သန်လျှင်မြို့နယ်</option>
                        <option value="Yuzana">ယုဇနမြို့နယ်</option>
                        <option value="Hlegu">လှည်းကူးမြို့နယ်</option>
                        <option value="Hmawbi">မှော်ဘီမြို့နယ်</option>
                        <option value="Dala">ဒလမြို့နယ်</option>
                      </select>
                    </div>
                  </div>        
                   <div class="form-group row">
                    <label for="inputPrice" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPrice" placeholder="Enter price...." name="price">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPrice" class="col-sm-2 col-form-label">Room</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPrice" placeholder="Enter Room...." name="room">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputFeet" class="col-sm-2 col-form-label">Feet</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputFeet" placeholder="Enter feet...." name="feet">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="inputFeet" class="col-sm-2 col-form-label">description</label>
                    <div class="col-sm-10">
                      <textarea style="height: 200px;" class="form-control" name="description"></textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image1</label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                        <div class="custom-file mb-3">
                          <input type="file" name="img1" class="custom-file-input" id="image" required>
                          <label class="custom-file-label" for="image">Choose file...</label>
                          <div class="invalid-feedback">Example invalid custom file feedback</div>
                    </div>


                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image2</label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img2" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Choose image</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image3</label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img3" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Choose image</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image4</label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img4" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Choose image</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image5</label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img5" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Choose image</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image6</label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img6" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Choose image</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label">Image7</label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img7" class="custom-file-input" id="image">
                        <label class="custom-file-label" for="image">Choose image</label>
                      </div>
                    </div>
                    </div>  

                  </div>

                </div>
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <a href="#" class="col-sm-2 btn float-right" style="background-color: lightgrey;">Cancel</a>
                  <button type="submit" name="submit" class="col-sm-2 btn float-left" style="background-color: #39d8dd; color: white;">
                    Submit
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
