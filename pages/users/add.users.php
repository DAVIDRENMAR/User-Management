<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <?php require '../../includes/links.php' ?>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
 
  <?php require '../../includes/navbar.php' ?> 

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 
<?php require '../../includes/sidebar.php' ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Add Users</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row justify-content-center">
          <div class="col-md-8">
          <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Users</h3>
              </div>
              <form action="userData/ctrl.add.users.php" method="POST">
                <div class="card-body">
                  <div class="form-group">
                    <label >First Name</label>
                    <input type="text" class="form-control" name="firstname" placeholder="First Name">
                  </div>

                  <div class="form-group">
                    <label >Middle Name</label>
                    <input type="text" class="form-control" name="middlename" placeholder="Middle Name">
                  </div>

                  <div class="form-group">
                    <label >Last Name</label>
                    <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                  </div>

                  <div class="form-group">
                    <label >Email</label>
                    <input type="text" class="form-control" name="email" placeholder="Email">
                  </div>

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="">Username</label>
                      <input type="text" class="form-control" name="username" placeholder="Username">
                    </div>
                  </div>

           

                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="">Password</label>
                      <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- /.row -->
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
         
            <!-- /.card -->

            <!-- DIRECT CHAT -->
          
            <!--/.direct-chat -->

            <!-- TO DO List -->
         
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
         
            <!-- /.card -->

            <!-- solid sales graph -->
         
            <!-- /.card -->

            <!-- Calendar -->
          
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require '../../includes/footer.php' ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<?php require '../../includes/scripts.php'?>

</body>
</html>
