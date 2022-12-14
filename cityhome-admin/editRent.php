<?php  

  session_start();

  if (empty($_SESSION['admin_id'])) {
    header('location:index.php');
  }

  if (isset($_GET['id'])) {
    require('db.php');
    $edit_id = $_GET['id'];

    $get_category = "SELECT * FROM category";
    $connect_cat = mysqli_query($dbcon,$get_category);

    $sql = "SELECT * FROM for_rent WHERE id='$edit_id'";
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
            <h1 class="m-0 text-dark">Edit Data For Rent</h1>
          </div><!-- /.col -->
          <div class="col-sm-2">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="forrent.php">Home</a></li>
              <li class="breadcrumb-item active">Edit For Rent</li>
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
              <form class="form-horizontal" action="process/updateRent.php" method="POST" enctype="multipart/form-data">
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
                        <option value="kyauktada">?????????????????????????????????????????????????????????</option>
                        <option value="papedan">??????????????????????????????????????????????????????</option>
                        <option value="latha">?????????????????????????????????</option>
                        <option value="lanmadaw">???????????????????????????????????????????????????</option>
                        <option value="alone">????????????????????????????????????</option>
                        <option value="sanchaung">?????????????????????????????????????????????????????????</option>
                        <option value="botathaung">???????????????????????????????????????????????????????????????</option>
                        <option value="pazundaung">?????????????????????????????????????????????????????????</option>
                        <option value="Hlaing">??????????????????????????????????????????</option>
                        <option value="mingala-taung-nyunt">??????????????????????????????????????????????????????????????????????????????</option>
                        <option value="dawpone">??????????????????????????????????????????</option>
                        <option value="kyimyindaing">??????????????????????????????????????????????????????????????????</option>
                        <option value="thaketa">???????????????????????????????????????</option>
                        <option value="kamayut">?????????????????????????????????????????????</option>
                        <option value="mayangon">??????????????????????????????????????????????????????</option>
                        <option value="tamwe">???????????????????????????????????????</option>
                        <option value="bahan">???????????????????????????????????????</option>
                        <option value="yankin">?????????????????????????????????????????????</option>
                        <option value="thuwana">????????????????????????????????????</option>
                        <option value="thingangyun">??????????????????????????????????????????????????????????????????</option>
                        <option value="north Okkalapa">????????????????????????????????????????????????????????????</option>
                        <option value="south Okkalapa">?????????????????????????????????????????????????????????</option>
                        <option value="insein">????????????????????????????????????????????????</option>
                        <option value="new dagon south">???????????????????????????????????????????????????</option>
                        <option value="new dagon north">??????????????????????????????????????????????????????</option>
                        <option value="new dagon east">???????????????????????????????????????????????????</option>
                        <option value="shwepyitha">??????????????????????????????????????????????????????</option>
                        <option value="hlaingthaya">??????????????????????????????????????????????????????</option>
                        <option value="htaukk yant">??????????????????????????????????????????????????????</option>
                        <option value="mingaladon">??????????????????????????????????????????????????????</option>
                        <option value="pale">????????????????????????????????????</option>
                        <option value="thanlyin">????????????????????????????????????????????????</option>
                        <option value="yuzana">????????????????????????????????????</option>
                        <option value="hlegu">????????????????????????????????????????????????</option>
                        <option value="hmawbi">?????????????????????????????????????????????</option>
                        <option value="dala">??????????????????????????????</option>
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
                    <label for="inputRoom" class="col-sm-2 col-form-label">Room</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputRoom" value="<?php echo $edit['room']; ?>" name="room">
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
                    <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
                      <div class="col-sm-10">
                      <select class="form-control" id="exampleFormControlSelect1" name="category">
                        
                        <?php  
                          while($catList = mysqli_fetch_assoc($connect_cat)){
                        ?>
                          <option value="<?php echo $catList['name']; ?>"><?php echo $catList['name']; ?></option>
                        <?php
                          }
                        ?>
                      </select>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-6">
                    <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img1" class="custom-file-input" id="file1">
                        <label class="custom-file-label" id="lfile1" for="image">Image 1</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img2" class="custom-file-input" id="file2">
                        <label class="custom-file-label" id="lfile2" for="image">Image 2</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img3" class="custom-file-input" id="file3">
                        <label class="custom-file-label" id="lfile3" for="image">Image 3</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img4" class="custom-file-input" id="file4">
                        <label class="custom-file-label" id="lfile4" for="image">Image 4</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img5" class="custom-file-input" id="file5">
                        <label class="custom-file-label" id="lfile5" for="image">Image 5</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img6" class="custom-file-input" id="file6">
                        <label class="custom-file-label" id="lfile6" for="image">Image 6</label>
                      </div>
                    </div>
                    </div>  
                  </div>

                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img7" class="custom-file-input" id="file7">
                        <label class="custom-file-label" id="lfile7" for="image">Iamge 7</label>
                      </div>
                    </div>
                    </div>  
                  </div>
                  
                   <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img8" class="custom-file-input" id="file8">
                        <label class="custom-file-label" id="lfile8" for="image">Image 8</label>
                      </div>
                    </div>
                    </div>  
                  </div>
                  
                   <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img9" class="custom-file-input" id="file9">
                        <label class="custom-file-label" id="lfile9" for="image">Image 9</label>
                      </div>
                    </div>
                    </div>  
                  </div>
                  
                   <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img10" class="custom-file-input" id="file10">
                        <label class="custom-file-label" id="lfile10" for="image">Image 10</label>
                      </div>
                    </div>
                    </div>  
                  </div>
                    </div>
                    
                    <div class="col-md-6">
                                          <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img11" class="custom-file-input" id="file11">
                        <label class="custom-file-label" id="lfile11" for="image">Image 11</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img12" class="custom-file-input" id="file12">
                        <label class="custom-file-label" id="lfile12" for="image">Image 12</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img13" class="custom-file-input" id="file13">
                        <label class="custom-file-label" id="lfile13" for="image">Image 13</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img14" class="custom-file-input" id="file14">
                        <label class="custom-file-label" id="lfile14" for="image">Image 14</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img15" class="custom-file-input" id="file15">
                        <label class="custom-file-label" id="lfile15" for="image">Image 15</label>
                      </div>
                    </div>
                    </div>  

                  </div>
                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img16" class="custom-file-input" id="file16">
                        <label class="custom-file-label" id="lfile16" for="image">Image 16</label>
                      </div>
                    </div>
                    </div>  
                  </div>

                  <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img17" class="custom-file-input" id="file17">
                        <label class="custom-file-label" id="lfile17" for="image">Image 17</label>
                      </div>
                    </div>
                    </div>  
                  </div>
                  
                   <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img18" class="custom-file-input" id="file18">
                        <label class="custom-file-label" id="lfile18" for="image">Image 18</label>
                      </div>
                    </div>
                    </div>  
                  </div>
                  
                   <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img19" class="custom-file-input" id="file19">
                        <label class="custom-file-label" id="lfile19" for="image">Image 19</label>
                      </div>
                    </div>
                    </div>  
                  </div>
                  
                   <div class="form-group row">
                    <label for="image" class="col-sm-2 col-form-label"></label>
                    <div class="form-group col-sm-10">
                      <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img20" class="custom-file-input" id="file20">
                        <label class="custom-file-label" id="lfile20" for="image">Image 20</label>
                      </div>
                    </div>
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
<script type="application/javascript">
    $('#file1').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile1').html(fileName);
    });
    
     $('#file2').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile2').html(fileName);
    });
    
     $('#file3').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile3').html(fileName);
    });
    
     $('#file4').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile4').html(fileName);
    });
    
     $('#file5').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile5').html(fileName);
    });
    
     $('#file6').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile6').html(fileName);
    });
    
     $('#file7').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile7').html(fileName);
    });
    
     $('#file8').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile8').html(fileName);
    });
    
     $('#file9').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile9').html(fileName);
    });
    
     $('#file10').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile10').html(fileName);
    });
    
     $('#file11').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile11').html(fileName);
    });
    
     $('#file12').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile12').html(fileName);
    });
    
     $('#file13').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile13').html(fileName);
    });
    
     $('#file14').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile14').html(fileName);
    });
    
     $('#file15').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile15').html(fileName);
    });
    
     $('#file16').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile16').html(fileName);
    });
    
     $('#file17').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile17').html(fileName);
    });
    
     $('#file18').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile18').html(fileName);
    });
    
     $('#file19').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile19').html(fileName);
    });
    
     $('#file20').change(function(e){
        var fileName = e.target.files[0].name;
        $('#lfile20').html(fileName);
    });
</script>
</body>
</html>
