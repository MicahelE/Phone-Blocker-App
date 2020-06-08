<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Volak Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css?h=2c0fc24b3d3038317dc51c05339856d0">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=37e5519e2d0203c617714852a76d0b4e">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css"> --}}
</head>

<body style="background-color: #d7d9e0;">
    <div></div>
    <nav class="navbar navbar-light navbar-expand" style="width: 3500px;height: 70px;margin: 0px 0px 24px;padding: 8px 16px;margin-left: 224px;background-color: #ffffff;">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation" style="width: 80px;height: 60px;background-image: url(&quot;/assets/img/logo-dash.png?h=33bb4bfd43d8957890b0d68275e30a48&quot;);">
                        <div></div>
                    </li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul><a class="navbar-brand text-center d-flex justify-content-center align-items-center" href="#" style="width: 239px;margin-left: -87px;font-size: 14px;font-family: century gothic;">Volak Resources</a>
                <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group"><input class="bg-light border-light form-control border-0 small" type="text" placeholder="Search for ..." style="width: 316px;background-color: rgb(253,254,255);font-size: 12px;font-family: century gothic;">
                        <div class="input-group-append"><button class="btn btn-primary py-0" type="button" style="background-color: rgb(95,102,109);"><i class="fas fa-search"></i></button></div>
                    </div>
                </form>
                <ul class="nav navbar-nav flex-nowrap ml-auto" style="margin-left: 5px;">
                    <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                        <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                            <form class="form-inline mr-auto navbar-search w-100">
                                <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                                    <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                role="menu">
                                <h6 class="dropdown-header">alerts center</h6>
                                <a class="d-flex align-items-center dropdown-item" href="#">
                                    <div class="mr-3">
                                        <div class="bg-primary icon-circle"><i class="fas fa-file-alt text-white"></i></div>
                                    </div>
                                    <div><span class="small text-gray-500">December 12, 2019</span>
                                        <p>A new monthly report is ready to download!</p>
                                    </div>
                                </a>
                                <a class="d-flex align-items-center dropdown-item" href="#">
                                    <div class="mr-3">
                                        <div class="bg-success icon-circle"><i class="fas fa-donate text-white"></i></div>
                                    </div>
                                    <div><span class="small text-gray-500">December 7, 2019</span>
                                        <p>$290.29 has been deposited into your account!</p>
                                    </div>
                                </a>
                                <a class="d-flex align-items-center dropdown-item" href="#">
                                    <div class="mr-3">
                                        <div class="bg-warning icon-circle"><i class="fas fa-exclamation-triangle text-white"></i></div>
                                    </div>
                                    <div><span class="small text-gray-500">December 2, 2019</span>
                                        <p>Spending Alert: We've noticed unusually high spending for your account.</p>
                                    </div>
                                </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                        </div>
                    </li>
                    <li class="nav-item dropdown no-arrow mx-1" role="presentation">
                        <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="width: -7px;"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></a>
                            <div class="dropdown-menu dropdown-menu-right dropdown-list dropdown-menu-right animated--grow-in"
                                role="menu">
                                <h6 class="dropdown-header">alerts center</h6>
                                <a class="d-flex align-items-center dropdown-item" href="#">
                                    <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="/assets/img/avatars/avatar4.jpeg?h=fefb30b61c8459a66bd338b7d790c3d5">
                                        <div class="bg-success status-indicator"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate"><span>Hi there! I am wondering if you can help me with a problem I've been having.</span></div>
                                        <p class="small text-gray-500 mb-0">Emily Fowler - 58m</p>
                                    </div>
                                </a>
                                <a class="d-flex align-items-center dropdown-item" href="#">
                                    <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="/assets/img/avatars/avatar2.jpeg?h=5d142be9441885f0935b84cf739d4112">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate"><span>I have the photos that you ordered last month!</span></div>
                                        <p class="small text-gray-500 mb-0">Jae Chun - 1d</p>
                                    </div>
                                </a>
                                <a class="d-flex align-items-center dropdown-item" href="#">
                                    <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="/assets/img/avatars/avatar3.jpeg?h=c5166867f10a4e454b5b2ae8d63268b3">
                                        <div class="bg-warning status-indicator"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate"><span>Last month's report looks great, I am very happy with the progress so far, keep up the good work!</span></div>
                                        <p class="small text-gray-500 mb-0">Morgan Alvarez - 2d</p>
                                    </div>
                                </a>
                                <a class="d-flex align-items-center dropdown-item" href="#">
                                    <div class="dropdown-list-image mr-3"><img class="rounded-circle" src="/assets/img/avatars/avatar5.jpeg?h=35dc45edbcda6b3fc752dab2b0f082ea">
                                        <div class="bg-success status-indicator"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate"><span>Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</span></div>
                                        <p class="small text-gray-500 mb-0">Chicken the Dog · 2w</p>
                                    </div>
                                </a><a class="text-center dropdown-item small text-gray-500" href="#">Show All Alerts</a></div>
                        </div>
                        <div class="shadow dropdown-list dropdown-menu dropdown-menu-right" aria-labelledby="alertsDropdown"></div>
                    </li>
                    <div class="d-none d-sm-block topbar-divider"></div>
                </ul>
            </div>
        </div>
    </nav>
    <div id="wrapper" style="margin-left: 226px;width: 1000px;">
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <div class="container-fluid" style="width: 4550px;">
                    <h3 class="text-dark mb-4" style="font-family: century gothic;">Total Subscribers</h3>
                    <div class="card shadow" style="width: 4550px;">
                        <div class="card-header py-3">
                            <p class="m-0 font-weight-bold" style="font-family: century gothic;color: rgb(3,10,17);">Subscriber Information</p>
                        </div>
                        <div class="card-body">
                            <div class="row" style="width: 1050PX;">
                                <div class="col-md-6 text-nowrap" style="width: 500px;">
                                    <div id="dataTable_length" class="dataTables_length" aria-controls="dataTable" style="width: 1698px;margin-left: 0px;"><label>Show&nbsp;<select class="form-control form-control-sm custom-select custom-select-sm"><option value="10" selected="">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select>&nbsp;</label></div>
                                </div>
                                <div class="col-md-6" style="width: 1727px;margin-left: 0px;">
                                    <div class="text-md-right dataTables_filter" id="example1_filter" style="margin-left: -19px;width: 500px;"><label></label>
                                        <form class="d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="margin-left: 38px;">
                                            <div class="input-group"><input class="bg-light border-light form-control border-0 small" type="text" placeholder="Search for ..." style="width: 316px;background-color: rgb(253,254,255);font-size: 12px;font-family: century gothic;"
                                                    autofocus="">
                                                <div class="input-group-append"><button class="btn btn-primary active py-0" type="button" style="background-color: rgb(95,102,109);"><i class="fas fa-search"></i></button></div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info" style="width: 4500px;">
                                <table class="table my-0" id="example1">
                                    <thead>
                                        <tr>
                                            <th style="width: 241px;">Full Name</th>
                                            <th style="width: 123px;">Gender</th>
                                            <th>Date of Birth</th>
                                            <th>NIN</th>
                                            <th>Mother Maiden Name</th>
                                            <th>Email Address</th>
                                            <th style="width: 218px;">Address</th>
                                            <th>City</th>
                                            <th>L.G.A</th>
                                            <th>State</th>
                                            <th style="width: 112px;">No. of Sims</th>
                                            <th>Phone 1 Number</th>
                                            <th>Phone 1 Network</th>
                                            <th>Line 1 Type</th>
                                            <th style="width: 174px;">Phone 1 Model</th>
                                            <th>Phone 1 IMEI</th>
                                            <th>Phone 1 Status</th>
                                            <th>Phone 2 Number</th>
                                            <th>Phone 2 Network</th>
                                            <th>Line 2 Type</th>
                                            <th style="width: 184px;">Phone 2 Model</th>
                                            <th>Phone 2 IMEI</th>
                                            <th>Phone 2 Status</th>
                                            <th>Phone 3 Number</th>
                                            <th>Phone 3 Network</th>
                                            <th>Line 3 Type</th>
                                            <th style="width: 137px;">Phone 3 Model</th>
                                            <th>Phone 3 IMEI</th>
                                            <th>Phone 3 Status</th>
                                            <th>Phone 4 Number</th>
                                            <th>Phone 4 Network</th>
                                            <th>Line 4 Type</th>
                                            <th style="width: 88px;">Phone 4 Model</th>
                                            <th>Phone 4 IMEI</th>
                                            <th style="width: 104px;">Phone 4 Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($data as $row)
                                      @php
                                          $no= rand(1,22);
                                      @endphp
                  <tr data-id={{$row->id}}>  
                  <td>@if ( $row->gender=='Male' )<img class="rounded-circle mr-2" width="30" height="30" src="https://source.unsplash.com/EQFtEzJGERg"> @else<img class="rounded-circle mr-2" width="30" height="30" src="https://source.unsplash.com/g0pb9aXpbgQ"> @endif<a style="color: black;" href="{{route('profile', $row->id)}}">{{ $row->name }}</a></td>
                                      <td>{{ $row->gender }}</td>
                                      <td>{{ $row->dob }}</td>
                                      <td>{{ $row->nin }}</td>
                                      <td>{{ $row->momname }}</td>
                                      <td>{{ $row->email }}</td>
                                      <td>{{ $row->address }}</td>
                                      <td>{{ $row->lga }}</td>
                                      <td>{{ $row->city }}</td>
                                      <td>{{ $row->state }}</td>
                                      <td>{{ $row->simno }}</td>
                                      <td>{{ $row->phonenumber }}</td>
                                      <td>{{ $row->network }}</td>
                                      <td>{{ $row->linetype1 }}</td>
                                      <td>{{ $row->phonetype1 }}</td>
                                      <td>{{ $row->puk }}</td>
                                      <td>@if ($row->blockstatus)
                                        Inactive
                                        @else 
                                        Active
                                        @endif</td>
                                      <td>{{ $row->phonenumber2 }}</td>
                                      <td>{{ $row->network2 }}</td>
                                      <td>{{ $row->linetype2 }}</td>
                                      <td>{{ $row->phonetype2 }}</td>
                                      <td>{{ $row->imei2 }}</td>
                                      <td>@if ($row->blockstatus2)
                                        Inactive
                                        @else 
                                        Active
                                        @endif</td>
                                      <td>{{ $row->phonenumber3 }}</td>
                                      <td>{{ $row->network3 }}</td>
                                      <td>{{ $row->linetype3 }}</td>
                                      <td>{{ $row->phonetype3 }}</td>
                                      <td>{{ $row->imei3 }}</td>
                                      <td>@if ($row->blockstatus3)
                                        Inactive
                                        @else 
                                        Active
                                        @endif</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>-</td>
                                      <td>@if (($row->id==6 or $row->id==7) && $row->blockstatus4)
                                        Active
                                        @else 
                                        -
                                        @endif</td>
                  </tr>
                  @endforeach
                                    </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                            {{-- <div class="row">
                                <div class="col-md-6 align-self-center">
                                    <p id="dataTable_info" class="dataTables_info" role="status" aria-live="polite">Showing 1 to 10 of 27</p>
                                </div>
                                <div class="col-md-6">
                                    <nav class="d-lg-flex justify-content-lg-end dataTables_paginate paging_simple_numbers">
                                        <ul class="pagination">
                                            <li class="page-item disabled"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a></div>
    <div></div>
    <div></div>
    <nav class="navbar navbar-dark fixed-top align-items-start" style="height: 200px;width: 224px;background-color: #6f6f74c5;background-repeat: no-repeat;">
        <div class="container-fluid"><a href="#"><img class="border rounded-circle img-profile" src="/assets/img/Layer18.png?h=ffbc199f65eded4a1f743b6df8395df3" style="margin-left: 23px;margin-top: 40px;width: 100px;height: 100px;background-color: #fefdfd;background-repeat: no-repeat;background-size: cover;"><span style="color: rgb(252,253,254);margin-left: 20px;margin-bottom: 0px;margin-top: 0px;">Aribisala Helen</span></a>
            <nav
                class="navbar navbar-dark fixed-top align-items-start" style="height: 1348px;width: 224px;background-color: #33343aee;margin-top: 201px;">
                <div class="container-fluid">
                  <ul class="nav navbar-nav text-light" id="accordionSidebar" style="margin-top: 11px;">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/dashboard"><i class="fas fa-tachometer-alt"></i><span style="font-size: 18px;">DASHBOARD</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/datatable"><span>Total Subscribers</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"><span>Smartphone Users</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#"><span>Business subscribers</span></a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/blockedlines"><span>Blocked Phones</span></a><a class="nav-link" href="#"><span>Network Statistics</span></a><a class="nav-link" href="/blockedlines"><span>Flagged Subscribers</span></a></li>
                </ul>
                </div>
    </nav>
    </div>
    </nav>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="/assets/js/script.min.js?h=c36e815cffc23831d7329b951063bde2"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
    <script>
      $(document).ready(function() {
       $('#example1').DataTable({
          "pagingType": "full_numbers",
          "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
          ],
          responsive: false,
          "scrollY": 500,
          "autoWidth": true,
          "scrollX": true,
          language: {
         
          }
          sDom: 'lrtip'
        });

        // $('#example1_filter input[type="search"]').addClass("bg-light border-light form-control border-0 small").css({'width': '316px','background-color': 'rgb(253,254,255)','font-size': '12px','font-family': 'century gothic'});
      });
    </script>
</body>

</html>