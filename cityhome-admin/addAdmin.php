<?php  

  session_start();

  if (empty($_SESSION['admin_id'])) {
    header('location:index.php');
  }

  require_once('db.php');
  $get_category = "SELECT * FROM admin";

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
            <h1 class="m-0 text-dark">Add New Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
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
              <form class="form-horizontal" action="process/createAdmin.php" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Enter name...." name="name">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPrice" placeholder="Enter email...." name="email">
                    </div>
                  </div>
                   <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword" placeholder="Enter password...." name="password">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputRole" class="col-sm-2 col-form-label">Role</label>
                      <div class="form-group col-sm-10">
                        <select class="form-control" name="role">
                          <option>super_admin</option>
                          <option>admin</option>
                         
                        </select>
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
