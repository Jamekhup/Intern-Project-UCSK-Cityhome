 <?php  

  session_start();

  if (empty($_SESSION['admin_id'])) {
    header('location:index.php');
  }
  require('db.php');

  $select = "SELECT * FROM for_sale ORDER BY id DESC";
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
           <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/cityhomelogo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">City Home Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/Adminlogo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['admin_name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 myaside">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item myproject has-treeview">
            <a href="dashboard.php" class="nav-link">
              <i class="nav-icon fa fa-industry"></i>
              <p>
                Upcoming Projects
              </p>
            </a>
          </li>
          

          <li class="nav-item mysale has-treeview">
            <a href="forsale.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                For Sale
              </p>
            </a>
          </li>

          <li class="nav-item myrent has-treeview">
            <a href="forrent.php" class="nav-link">
              <i class="fab fa-accusoft"></i>
              <p>
                For Rent
              </p>
            </a> 
          </li>

           <li class="nav-item myrent has-treeview">
            <a href="category.php" class="nav-link">
              <i class="fas fa-bahai"></i>
              <p>
                Category
              </p>
            </a> 
          </li>

          <li class="nav-item myadmin has-treeview">
            <a href="admin.php" class="nav-link">
              <p><i class="fas fa-user-shield">
              Admin</i>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">For Sale</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">For Sale</li>
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
                <a href="addSale.php" class="btn btn-info">Add New For Sale</a>
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

                <div class="card">
                  <div class="card-body">

                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>ID</th>
                        <th>Address</th>
                        <th>Township</th>
                        <th>Price</th>
                        <th>Room</th>
                        <th>Category</th>
                        <th>Feet</th>
                        <th>Image1</th>
                        <th>Sold Out</th>
                        <th>Edit</th>
                       <th>
                            <p>Delete All</p>
                          <div class="mydiv">
                             <div class="row">
                            <input type="checkbox" id="checkAll" name="checkAll" id="select">&nbsp;
                             <button style="border:none;" name="save" type="submit" id="delete"><i class="fas fa-trash text-danger"></i></button>
                            </div>
                          </div>
                        </th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php 
                      foreach($result as $index => $row){
                        ?>
                          <tr id="<?php echo $row['id']; ?>">
                         <td><?php echo $index + 1;?></td>
                          <td><?php echo $row['address']; ?></td>
                          <td><?php echo $row['township']; ?></td>
                          <td><?php echo $row['price']; ?></td>
                          <td><?php echo $row['room']; ?></td>
                          <td><?php echo $row['category_name']; ?></td>
                          <td><?php echo $row['feet']; ?></td>

                          <td><img src="sale/<?php echo $row['img1']; ?>" alt=""  style="width:50px;height:50px;"></td>

                          <td>
                            <?php 
                              $out = $row['sold'];

                              if ($out == 1) {
                              ?>
                              <small class="text-info">Sold Out</small>
                              <?php
                              }else{
                              ?>
                                <form action="process/saleOut.php" method="POST" onsubmit="if(!confirm('Really Sold Out?')){return false;}">
                                  <input type="checkbox" name="soldout" required>
                                  <input type="hidden" value="<?php echo $row['id']; ?>" name="soldid">
                                  <br>
                                  <button name="submit" class="btn btn-sm btn-primary">Sold</button>
                                </form>
                              <?php
                              }

                            ?>
                          </td>
                                            
                          <td>
                            <a href="editSale.php?id=<?php echo $row['id']; ?>"><i class="fas fa-edit text-info"></i></a>
                          </td>
                          <td><input type="checkbox" id="checkItem" name="check[]" value="<?php echo $row["id"]; ?>">
                          </td>
                        </tr>
                        <?php
                       } ?>

                      </tfoot>
                    </table>
                    
                  </div>
                  <!-- /.card-body -->
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

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>
$(document).ready(function(){

  $("#checkAll").click(function () {
  $('input:checkbox').not(this).prop('checked', this.checked);
  });

  $('#delete').click(function(){

  
  if(confirm("Are you sure you want to delete this?"))
  {
   var id = [];
   
   $(':checkbox:checked').each(function(i){
    id[i] = $(this).val();
   });
 
   if(id.length === 0) //tell you if the array is empty
   {
    alert("Please Select aleast one checkbox");
   }
   else
   {
    $.ajax({
      method:'POST',
     url:'process/delAllSale.php',
     
     data:{id:id},
     success:function()
     {
      for(var i=0; i<id.length; i++)
      {
       $('tr#'+id[i]+'').css('background-color', '#ccc');
       $('tr#'+id[i]+'').fadeOut('slow');
      }
     }
     
    });
   }
   
  }
  else
  {
   return false;
  }
 });
 
});

</script>

</body>
</html>
