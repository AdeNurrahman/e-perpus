<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title><?= $judul;  ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="<?= base_url() ;?>assets/admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="<?= base_url() ;?>assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?= base_url() ;?>assets/admin/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link href="<?= base_url() ;?>assets/admin/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?= base_url() ;?>assets/admin/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="<?= base_url() ;?>assets/admin/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="<?= base_url() ;?>home/v_admin" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Admin</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">

          <!-- Sidebar toggle button-->
          <a href="<?= base_url() ;?>assets/admin/#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>

          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <a href="<?= base_url() ;?>assets/admin/#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-envelope-o"></i>
                  <span class="label label-success">4</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 4 messages</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- start message -->
                        <a href="<?= base_url() ;?>assets/admin/#">
                          <div class="pull-left">
                            <img src="<?= base_url() ;?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                          </div>
                          <h4>
                            Support Team
                            <small><i class="fa fa-clock-o"></i> 5 mins</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li><!-- end message -->
                      <li>
                        <a href="<?= base_url() ;?>assets/admin/#">
                          <div class="pull-left">
                            <img src="<?= base_url() ;?>assets/admin/dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            AdminLTE Design Team
                            <small><i class="fa fa-clock-o"></i> 2 hours</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="<?= base_url() ;?>assets/admin/#">
                          <div class="pull-left">
                            <img src="<?= base_url() ;?>assets/admin/dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Developers
                            <small><i class="fa fa-clock-o"></i> Today</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="<?= base_url() ;?>assets/admin/#">
                          <div class="pull-left">
                            <img src="<?= base_url() ;?>assets/admin/dist/img/user3-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Sales Department
                            <small><i class="fa fa-clock-o"></i> Yesterday</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                      <li>
                        <a href="<?= base_url() ;?>assets/admin/#">
                          <div class="pull-left">
                            <img src="<?= base_url() ;?>assets/admin/dist/img/user4-128x128.jpg" class="img-circle" alt="user image"/>
                          </div>
                          <h4>
                            Reviewers
                            <small><i class="fa fa-clock-o"></i> 2 days</small>
                          </h4>
                          <p>Why not buy a new awesome theme?</p>
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="<?= base_url() ;?>assets/admin/#">See All Messages</a></li>
                </ul>
              </li>
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="<?= base_url() ;?>assets/admin/#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-bell-o"></i>
                  <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 10 notifications</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li>
                        <a href="<?= base_url() ;?>assets/admin/#">
                          <i class="fa fa-users text-aqua"></i> 5 new members joined today
                        </a>
                      </li>
                      <li>
                        <a href="<?= base_url() ;?>assets/admin/#">
                          <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                        </a>
                      </li>
                      <li>
                        <a href="<?= base_url() ;?>assets/admin/#">
                          <i class="fa fa-users text-red"></i> 5 new members joined
                        </a>
                      </li>

                      <li>
                        <a href="<?= base_url() ;?>assets/admin/#">
                          <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                        </a>
                      </li>
                      <li>
                        <a href="<?= base_url() ;?>assets/admin/#">
                          <i class="fa fa-user text-red"></i> You changed your username
                        </a>
                      </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="<?= base_url() ;?>assets/admin/#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              <li class="dropdown tasks-menu">
                <a href="<?= base_url() ;?>assets/admin/#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-flag-o"></i>
                  <span class="label label-danger">9</span>
                </a>
                <ul class="dropdown-menu">
                  <li class="header">You have 9 tasks</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                      <li><!-- Task item -->
                        <a href="<?= base_url() ;?>assets/admin/#">
                          <h3>
                            Design some buttons
                            <small class="pull-right">20%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">20% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="<?= base_url() ;?>assets/admin/#">
                          <h3>
                            Create a nice theme
                            <small class="pull-right">40%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">40% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="<?= base_url() ;?>assets/admin/#">
                          <h3>
                            Some task I need to do
                            <small class="pull-right">60%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">60% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                      <li><!-- Task item -->
                        <a href="<?= base_url() ;?>assets/admin/#">
                          <h3>
                            Make beautiful transitions
                            <small class="pull-right">80%</small>
                          </h3>
                          <div class="progress xs">
                            <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                              <span class="sr-only">80% Complete</span>
                            </div>
                          </div>
                        </a>
                      </li><!-- end task item -->
                    </ul>
                  </li>
                  <li class="footer">
                    <a href="<?= base_url() ;?>assets/admin/#">View all tasks</a>
                  </li>
                </ul>
              </li>
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="<?= base_url() ;?>assets/admin/#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="<?= base_url() ;?>assets/admin/dist/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
                  <span class="hidden-xs">Ade Nurrahman</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="<?= base_url() ;?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      Ade Nurrahman - Web Developer
                      <small>Member since Desember. 2018</small>
                    </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="col-xs-4 text-center">
                      <a href="<?= base_url() ;?>assets/admin/#">Followers</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="<?= base_url() ;?>assets/admin/#">Sales</a>
                    </div>
                    <div class="col-xs-4 text-center">
                      <a href="<?= base_url() ;?>assets/admin/#">Friends</a>
                    </div>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="<?= base_url() ;?>assets/admin/#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="<?= base_url() ;?>home/v_login" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?= base_url() ;?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p>Ade Nurrahman</p>

              <a href="<?= base_url() ;?>assets/admin/#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>

          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->

          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="<?= base_url() ;?>home/v_admin">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>


            <li class="treeview">
              <a href="<?= base_url() ;?>home/v_buku">
                <i class="fa fa-files-o"></i>
                <span>Daftar Buku</span>
              </a>
            </li>
            <li>

            <li class="treeview active">
              <a href="<?= base_url() ;?>home/v_pinjam">
                <i class="fa fa-th"></i> <span>Daftar Pinjam</span> <small class="label pull-right bg-green">new</small>
              </a>
            </li>
            

            <li class="treeview">
              <a href="<?= base_url() ;?>assets/admin/#">
                <i class="fa fa-laptop"></i>
                <span>Daftar Member</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?= base_url() ;?>home/v_anggota">
                <i class="fa fa-edit"></i> <span>Anggota</span>
              </a>
            </li>


            <li class="treeview">
                <a href="<?= base_url() ;?>assets/admin/#">
                <i class="fa fa-table"></i> <span>Tables</span>
              </a>


            <li class="treeview">
              <a href="<?= base_url() ;?>assets/admin/#">
                <i class="fa fa-folder"></i> <span>Examples</span>
              </a>
            </li>
            <li class="treeview">
              <a href="<?= base_url() ;?>assets/admin/#">
                <i class="fa fa-share"></i> <span>Multilevel</span>
              </a>
            </li>
            <li><a href="<?= base_url() ;?>assets/admin/documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
            
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Daftar
            <small>Pinjam</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?= base_url() ;?>home/admin"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Daftar Pinjam</li>
          </ol>
        </section>


         <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Daftar Buku</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Kode Pinjam</th>
                        <th>Kode Buku</th>
                        <th>Nama Buku</th>
                        <th>Jumlah</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Denda</th>
                        <th>Options</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      <?php 
                        $no = 1;
                        foreach($v_pinjam as $hasil){

                      ?>

                      <tr>
                        <td><? = $no++  ?></td>
                        <td><? = $hasil->kd_pinjam  ?></td>
                        <td><? = $hasil->kd_buku  ?></td>
                        <td><? = $hasil->nm_bku  ?></td>
                        <td><? = $hasil->jml  ?></td>
                        <td><? = $hasil->tgl_pjm  ?></td>
                        <td><? = $hasil->tgl_kbl  ?></td>
                        <td><? = $hasil->denda  ?></td>
                        <td>
                          <a href="<?= base_url()  ?>home/edit><?= $hasil->kd_pinjam  ?>"  class="btn btn-sm btn-primary">Edit</a>
                          <a href="<?= base_url()  ?>home/edit><?= $hasil->kd_pinjam  ?>"  class="btn btn-sm btn-danger">Hapus</a>
                        </td>
                      </tr>
                    <?php } ?>

                    <tfoot>
                      <tr>
                        <th>No.</th>
                        <th>Kode Pinjam</th>
                        <th>Kode Buku</th>
                        <th>Nama Buku</th>
                        <th>Jumlah</th>
                        <th>Tanggal Pinjam</th>
                        <th>Tanggal Kembali</th>
                        <th>Denda</th>
                        <th>Options</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->



    
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?= base_url() ;?>assets/admin/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?= base_url() ;?>assets/admin/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ;?>assets/admin/dist/js/app.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="<?= base_url() ;?>assets/admin/plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="<?= base_url() ;?>assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="<?= base_url() ;?>assets/admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="<?= base_url() ;?>assets/admin/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="<?= base_url() ;?>assets/admin/plugins/chartjs/Chart.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?= base_url() ;?>assets/admin/dist/js/pages/dashboard2.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ;?>assets/admin/dist/js/demo.js" type="text/javascript"></script>

   <!-- page scrpit -->
     <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });

  </body>
</html>