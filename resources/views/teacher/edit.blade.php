
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('tittle')</title>
  <base href="{{\URL::to('/')}}">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Layout
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
      <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}">Logout</a>
                    </li>
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
            class="fas fa-th-large"></i></a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{\URL::to('/')}}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Your Site</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('dashboard')}}" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
               
              </p>
            </a>
          </li>
               <li class="nav-item">
<<<<<<< HEAD
<<<<<<< HEAD
            <a href="" class="nav-link">
=======
            <a href="{{url('students')}}" class="nav-link">
>>>>>>> 961abd5 (shahab)
=======
            <a href="" class="nav-link">
>>>>>>> 428e030 (User Code)
              <i class="nav-icon fas fa-user"></i>
              <p>
                Students
               
              </p>
            </a>
          </li>
          <li class="nav-item">
<<<<<<< HEAD
            <a href="" class="nav-link">
=======
            <a href="{{url('teachers')}}" class="nav-link">
<<<<<<< HEAD
>>>>>>> 961abd5 (shahab)
=======
>>>>>>> 0196463 (Raja)
>>>>>>> 428e030 (User Code)
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Teachers 
               
              </p>
            </a>
          </li>
          <li class="nav-item">
<<<<<<< HEAD
<<<<<<< HEAD
            <a href="" class="nav-link">
=======
            <a href="{{url('parents')}}" class="nav-link">
>>>>>>> 961abd5 (shahab)
=======
            <a href="" class="nav-link">
>>>>>>> 428e030 (User Code)
              <i class="nav-icon fas fa-cog"></i>
              <p>
                Parents 
               
              </p>
            </a>
          </li>
<<<<<<< HEAD
=======
          <li class="nav-item">
<<<<<<< HEAD
            <a href="{{url('salary_template')}}" class="nav-link">
              <i class="nav-icon fas  fa-money-bill-alt"></i>
              <p>
                Salary Template
=======
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
              Mgmt & Support Staff
>>>>>>> 428e030 (User Code)
               
              </p>
            </a>
          </li>
<<<<<<< HEAD
>>>>>>> 961abd5 (shahab)
=======
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
            Student Attendance
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
              Teacher Attendance
               
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
              User Attendance
               
              </p>
            </a>
          </li>
          
>>>>>>> 0196463 (Raja)
>>>>>>> 428e030 (User Code)
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   @yield('content')




   <div class="card">
<<<<<<< HEAD
<<<<<<< HEAD
  <div class="card-header"> Edit Teachers Page</div>
=======
  <div class="card-header"> Edit Teacher Page</div>
>>>>>>> 961abd5 (shahab)
=======
  <div class="card-header"> Edit Teachers Page</div>
>>>>>>> 428e030 (User Code)
  <div class="card-body">
      
      <form action="{{ url('/teacher/update') }}" method="post">
        {!! csrf_field() !!}
<<<<<<< HEAD
<<<<<<< HEAD
        
=======
>>>>>>> 961abd5 (shahab)
=======
        
>>>>>>> 428e030 (User Code)
        <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$teachers->name}}" class="form-control"></br>
        <label>Email</label></br>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 428e030 (User Code)
        <input type="text" name="email" id="email" value="{{$teachers->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$teachers->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$teachers->mobile}}" class="form-control"></br>
        <!--<input type="submit" value="Update" class="btn btn-success"></br>-->
        <button type="submit" class="btn btn-success" title="Update Teacher" onclick="return confirm
             ('are you want to Edit Teacher')"><i class="fa fa-trash-o" aria-hidden="true"></i> Update</button>
<<<<<<< HEAD
=======
        <input type="text" name="email" id="email" value="{{$teachers->email}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$teachers->address}}" class="form-control"></br>

        <label>Upload Photo</label></br>
        <input type="file" id="upload_file" name="upload_file" class="form-control">
        <span style="color: red;">@error('upload_file'){{$message}}@enderror</span><br><br>
        
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$teachers->mobile}}" class="form-control"></br>
        <!--<input type="submit" value="Update" class="btn btn-success"></br>-->
        <button type="submit" class="btn btn-secondary" title="Update Teacher" onclick="return confirm
             ('are you want to Update Teacher')"><i class="fa fa-trash-o" aria-hidden="true"></i> Update</button>
>>>>>>> 961abd5 (shahab)
=======
>>>>>>> 428e030 (User Code)
    </form>
  
  </div>
</div>
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 428e030 (User Code)




          </div>
          
    <!-- Main content -->
<<<<<<< HEAD
=======
</div>

          <!-- Main content -->
>>>>>>> 961abd5 (shahab)
=======
>>>>>>> 428e030 (User Code)
    <div class="content">
      <div class="container-fluid">
        <div class="row">
         
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              

           
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
