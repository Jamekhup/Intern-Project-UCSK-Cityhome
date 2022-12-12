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
      <nav class="mt-2 main_nav">
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
          

          <li class="nav-item has-treeview">
            <a href="forsale.php" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                For Sale
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="forrent.php" class="nav-link">
              <i class="fab fa-accusoft"></i>
              <p>
                For Rent
              </p>
            </a> 
          </li>

           <li class="nav-item has-treeview">
            <a href="category.php" class="nav-link">
              <i class="fas fa-bahai"></i>
              <p>
                Category
              </p>
            </a> 
          </li>
          <li class="nav-item has-treeview">
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