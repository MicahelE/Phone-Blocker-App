<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <style>
  /* th, td { white-space: nowrap; } */
  /* .card-body{width: 80%;} */
  /* table {width:80%;} */
  .fa-spin{font-size: 2rem;}
  </style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ url('/dashboard') }}" class="nav-link">Home</a>
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
              <img src="../../dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
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
              <img src="../../dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
              <img src="../../dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
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
          <span class="dropdown-item dropdown-header">15 Notifications</span>
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
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
           
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Phone User App</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
           
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Phone Users Table</h3>
            </div>
            <div class="container">    
               
                <div class="panel panel-default">
                     <div class="panel-heading">
                      <h3 class="panel-title">Phone users</h3>
                     </div>
                     <div class="panel-body">
                      <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data" onsubmit="$('.fa-spinner').removeAttr('hidden');">
                       @csrf
                       <input type="file" name="file" accept=".csv" required>
                       <i class="fas fa-spinner fa-spin" hidden></i>
                             <br>
                             
                             <button class="btn btn-success" onclick=" ">Import User Data</button>
                             <a class="btn btn-warning" href="{{ route('export') }}">Export User Data</a>
                             
                      </form>
                     
                     </div>
            <!-- /.card-header -->
            <div id="editModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                <!-- Modal content-->
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                  </div>
                  <div class="modal-body">
                    <form id="editForm" action="" class="form-horizontal" role="form" method="POST">
                      {{ csrf_field() }}
                      {{-- {{method_field('PUT')}} --}}
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="name">Name:</label>
                        <div class="col-sm-10">
                          <input name="name" type="name" class="form-control" id="name">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="phone">Phone</label>
                        <div class="col-sm-10">
                          <input name="phone" type="text" class="form-control" id="phone" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-4" for="dob">Date of Birth</label>
                        <div class="col-sm-10">
                          <input name="dob" type="text" class="form-control" id="dob" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="lga">LGA</label>
                        <div class="col-sm-10">
                          <input name="lga" type="text" class="form-control" id="lga" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-6" for="momname">Mother's maiden name</label>
                        <div class="col-sm-10">
                          <input name="momname" type="text" class="form-control" id="momname" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-6" for="nin">NIN</label>
                        <div class="col-sm-10">
                          <input name="nin" type="text" class="form-control" id="nin" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-6" for="puk">PUK</label>
                        <div class="col-sm-10">
                          <input name="puk" type="text" class="form-control" id="puk" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-6" for="simno">Sim no</label>
                        <div class="col-sm-10">
                          <input name="simno" type="text" class="form-control" id="simno" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-6" for="phonetype1">Phonetype 1 with IMEI</label>
                        <div class="col-sm-10">
                          <input name="phonetype1" type="text" class="form-control" id="phonetype1" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-6" for="phonetype2">Phonetype 2 with IMEI</label>
                        <div class="col-sm-10">
                          <input name="phonetype2" type="text" class="form-control" id="phonetype2" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-6" for="phonetype3">Phonetype 3 with IMEI</label>
                        <div class="col-sm-10">
                          <input name="phonetype3" type="text" class="form-control" id="phonetype3" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-6" for="network">Network</label>
                        <div class="col-sm-10">
                          <input name="network" type="text" class="form-control" id="network" >
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-6" for="address">Address</label>
                        <div class="col-sm-10">
                          <input name="address" type="text" class="form-control" id="address" >
                        </div>
                      </div>
                     <input type="submit"  value="Edit">
                    </form>
                    <div class="deleteContent">
                      Are you Sure you want to edit <span class="dname"></span> ? <span
                        class="hidden did"></span>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn actionBtn" data-dismiss="modal">
                        <span id="footer_action_button" class='glyphicon'> </span>
                      </button>
                      <button type="button" class="btn btn-warning" data-dismiss="modal">
                        <span class='glyphicon glyphicon-remove'></span> Close
                      </button>
                    </div>
                  </div>
                </div>
              </div> 
            </div>
            <div class="card-body">
                <table id="example1"  class="table table-bordered table-striped">
                    <thead>
                        <tr>
                         <th>Name</th>
                         <th>Phone no</th>
                         <th>Date of Birth</th>
                         <th>LGA</th>
                         <th>Mother's maiden name</th>
                         <th>NIN</th>
                         <th>PUK</th>
                         <th>Sim No</th>
                         <th>Phone type and Imei 1</th>
                         <th>Phone 1 blockage status</th>
                         <th>Phone type and Imei 2</th>
                         <th>Phone 2 blockage status</th>
                         <th>Phone type and Imei 3</th>
                         <th>Phone 3 blockage status</th>
                         <th>Network</th>
                         <th>Address</th>
                         
                         <th>Actions</th>
                        </tr>
                       </thead>
                       <tbody>
                        @foreach($data as $row)
                    <tr data-id={{$row->id}}>     
                       <td> <a href="{{route('profile', $row->id)}}">{{ $row->name }}</a></td>
                          <td>{{ $row->phonenumber }}</td>
                          <td>{{ $row->dob }}</td>
                          <td>{{ $row->lga }}</td>
                          <td>{{ $row->momname }}</td>
                          <td>{{ $row->nin }}</td>
                          <td>{{ $row->puk }}</td>
                          <td>{{ $row->simno }}</td>
                          <td>{{ $row->phonetype1 }}</td>
                          <td>{{$row->blockstatus}}</td>
                          <td>{{ $row->phonetype2 }}</td>
                          <td>{{$row->blockstatus2}}</td>
                          <td>{{ $row->phonetype3 }}</td>
                          <td>{{$row->blockstatus3}}</td>
                          <td>{{ $row->network }}</td>
                          <td>{{ $row->address }}</td>
                          {{-- <td>@if ($row->blockstatus)
                            Blocked
                            @else 
                            Unblocked
                            @endif</td> --}}
                            <td>
                              <button class="edit-modal btn btn-info edit" data-id="{{$row->id}}"
                              data-name="{{$row->name}}">
                              <span class="glyphicon glyphicon-edit"></span> Edit
                            </button></td>
                            {{-- <button class="delete-modal btn btn-danger"
                              data-id="{{$row->id}}" data-name="{{$row->name}}">
                              <span class="glyphicon glyphicon-trash"></span> Delete
                            </button></td> --}}
                         </tr> 
                        @endforeach
                        </tbody>
                    <tfoot>
                      <tr>
                        <th>Name</th>
                        <th>Phone no</th>
                        <th>Date of Birth</th>
                        <th>LGA</th>
                        <th>Mother's maiden name</th>
                        <th>NIN</th>
                        <th>PUK</th>
                        <th>Sim No</th>
                        <th>Phone type and Imei 1</th>
                         <th>Phone 1 blockage status</th>
                         <th>Phone type and Imei 2</th>
                         <th>Phone 2 blockage status</th>
                         <th>Phone type and Imei 3</th>
                         <th>Phone 3 blockage status</th>
                         <th>Network</th>
                         <th>Address</th>
                         
                         <th>Actions</th>

                      </tr>
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.3-pre
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    var table=$("#example1").DataTable({
      "responsive": false,
      "autoWidth": false,
      
      // "scrollX": 54em,
      "scrollX": true,
      "scrollY": 500
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });

   table.on('click', '.edit', function() {
  $tr=$(this).closest('tr');
  if($($tr).hasClass('child') ){
    $tr=$tr.prev('parent');
  }
  var data= table.row($tr).data();
  $name=$tr.find('a').text();
  $id= $tr.attr("data-id");
  $('#name').val($name);
  $('#phone').val(data[1]);
  $('#dob').val(data[2]);
  $('#lga').val(data[3]);
  $('#momname').val(data[4]);
  $('#nin').val(data[5]);
  $('#puk').val(data[6]);
  $('#simno').val(data[7]);
  $('#phonetype1').val(data[8]);
  $('#phonetype2').val(data[10]);
  $('#phonetype3').val(data[12]);
  $('#network').val(data[14]);
  $('#address').val(data[15]);
  // $('#lga').val(data[12]);

  $('#editModal').modal('show');
  $( "#editForm" ).attr( "action", "datatable/update/" + $id);
  });


  // $(document).ready(function(){

  });
</script>
</body>
</html>
