<?php  

  session_start();

  if (empty($_SESSION['admin_id'])) {
    header('location:index.php');
  }
  require('db.php');

  $select = "SELECT * FROM admin ORDER BY id DESC";

  $result = mysqli_query($dbcon,$select);
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
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Admin</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
              <div class="card-header">
                <a href="addAdmin.php" class="btn btn-info">Add New Admin</a>
              </div>
              <?php if (isset($_SESSION['success'])) {
              ?>
                <br>
                <div class="col-md-6 offset-md-3">
                  <p class="alert alert-success text-center">Data Upload Success!!</p>
                </div>
              <?php
              }unset($_SESSION['success']); ?>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php  
                    if ($result->num_rows > 0) {
                   ?>
                     

                     <?php 
                       foreach($result as $index => $row){
                        ?>
                        <tr id="<?php echo $row['id']; ?>">
                          <td><?php echo $index + 1;?></td>

                          <td><?php echo $row['name']; ?>
                          </td>
                          <td><?php echo $row['email']; ?></td>
                          <td><?php echo $row['role']; ?></td>
                          <td>
                          <form action="process/delAdmin.php" method="POST" class="float-left" onsubmit="if(!confirm('Are you sure to delete this?')){ return false;}">
                              <input type="hidden" name="del_id" value="<?php echo $admin['id']; ?>">
                              
                              <button style="border:none;" name="delete" type="submit"><i class="fas fa-trash text-danger"></i>
                              </button>
                            </form>
                          </td>
                        </tr>
                      <?php
                      }
                      ?>
                   <?php
                    }
                  ?>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <?php include('pages/footer.php'); ?>
  <script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
</body>
</html>