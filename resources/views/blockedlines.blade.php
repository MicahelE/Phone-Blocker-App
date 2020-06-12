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
    <nav class="navbar navbar-light navbar-expand" style="width: 1050px;height: 70px;margin: 0px 0px 24px;padding: 8px 16px;margin-left: 224px;background-color: #ffffff;">
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
    <button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
    <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav nav-tabs">
            <li class="nav-item" style="width: 80px;height: 60px;background-image: url(&quot;/assets/img/logo-dash.png?h=33bb4bfd43d8957890b0d68275e30a48&quot;);">
                <div></div>
            </li>
            <li class="nav-item"></li>
            <li class="nav-item"></li>
        </ul><a class="navbar-brand text-center d-flex justify-content-center align-items-center" href="#" style="width: 239px;margin-left: -87px;font-size: 14px;font-family: century gothic;">Volak Resources</a>
        <form class="d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group"><input class="bg-light border-light form-control border-0 small" type="text" placeholder="Search for ..." style="width: 316px;background-color: rgb(253,254,255);font-size: 12px;font-family: century gothic;">
                <div class="input-group-append"><button class="btn btn-primary py-0" type="button" style="background-color: rgb(95,102,109);"><i class="fas fa-search"></i></button></div>
            </div>
        </form>
        <ul class="nav nav-tabs flex-nowrap ml-auto" style="margin-left: 5px;">
            <li class="nav-item dropdown d-sm-none no-arrow"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fas fa-search"></i></a>
                <div class="dropdown-menu dropdown-menu-right p-3 animated--grow-in" role="menu" aria-labelledby="searchDropdown">
                    <form class="mr-auto navbar-search w-100">
                        <div class="input-group"><input class="bg-light form-control border-0 small" type="text" placeholder="Search for ...">
                            <div class="input-group-append"><button class="btn btn-primary py-0" type="button"><i class="fas fa-search"></i></button></div>
                        </div>
                    </form>
                </div>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <div class="nav-item dropdown no-arrow"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><span class="badge badge-danger badge-counter">3+</span><i class="fas fa-bell fa-fw"></i></button>
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
            <li class="nav-item dropdown no-arrow mx-1">
                <div class="nav-item dropdown no-arrow"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-envelope fa-fw"></i><span class="badge badge-danger badge-counter">7</span></button>
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
    <div class="container-fluid" style="margin-left: 258px;padding: -12px;width: 963px;background-color: rgba(239,238,238,0);">
        <h3 class="text-dark mb-4" style="font-family: century gothic;">Blocked Phones</h3>
        <div class="card shadow" style="margin-top: 16px;width: 1000px;margin-left: -29px;">
            <div class="card-header py-3" style="width: 1000px;">
                <p class="m-0 font-weight-bold" style="color: rgb(32,97,149);font-family: century gothic;font-weight: normal;">BLOCKED PHONE LIST</p>
            </div>
            <form class="d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" style="margin-left: 31px;margin-top: 0px;padding-top: 5px;padding-bottom: 0px;padding-left: 565px;">
                <div class="input-group"><input class="bg-light border-light form-control border-0 small" type="text" placeholder="Search for ..." style="width: 316px;background-color: rgb(253,254,255);font-size: 12px;font-family: century gothic;" autofocus="">
                    <div class="input-group-append"><button class="btn btn-primary active py-0" type="button" style="background-color: rgb(95,102,109);"><i class="fas fa-search"></i></button></div>
                </div>
            </form>
            <div class="card-body" style="width: 1000px;padding-top: 0px;">
                <div class="row" style="height: 450px;">
                    <div class="table-responsive table mt-2" id="dataTable-1" role="grid" aria-describedby="dataTable_info">
                        <table class="table my-0" id="example1">
                            <thead>
                                <tr>
                                    <th>NIN</th>
                                    <th>Phone Number</th>
                                    <th>Network</th>
                                    <th>Line Type</th>
                                    <th>Model</th>
                                    <th>Smartphone</th>
                                    <th>IMEI No.</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="{{ route('profile', $users[14]->id) }}" style="color: rgb(19,20,21);">{{ $users[14]->nin }}<br></a></td>
                                    <td>{{ $users[14]->phonenumber }}<br></td>
                                    <td>{{ $users[14]->linetype1 }}</td>
                                    <td>Private</td>
                                    <td>{{ $users[14]->phonetype1 }}</td>
                                    <td>Yes</td>
                                    <td>{{ $users[14]->puk }}<br><br></td>
                                    <td>@if ($users[14]->blockstatus3)
                                        Inactive
                                        @else 
                                        Active
                                        @endif</td>
                                    <td><button class="btn btn-primary" type="button" style="background-color: rgba(0,123,255,0.59);">Block Phone</button></td>
                                </tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                                <tr></tr>
                            </tbody>
                                    <tfoot>
                                        <tr></tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        <form>
                            <div class="form-group"><button class="btn btn-primary btn-sm" type="submit">Update</button></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-8" style="width: 400px;margin-left: -18px;">
                    <div class="row mb-3 d-none">
                        <div class="col">
                            <div class="card text-white bg-primary shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                    </div>
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card text-white bg-success shadow">
                                <div class="card-body">
                                    <div class="row mb-2">
                                        <div class="col">
                                            <p class="m-0">Peformance</p>
                                            <p class="m-0"><strong>65.2%</strong></p>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-rocket fa-2x"></i></div>
                                    </div>
                                    <p class="text-white-50 small m-0"><i class="fas fa-arrow-up"></i>&nbsp;5% since last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <nav class="navbar navbar-dark fixed-top align-items-start" style="height: 200px;width: 224px;background-color: #6f6f74;background-repeat: no-repeat;">
                    <div class="container-fluid"><a href="#"><img class="border rounded-circle img-profile" src="/assets/img/Layer18.png?h=ffbc199f65eded4a1f743b6df8395df3" style="margin-left: 23px;margin-top: 40px;width: 100px;height: 100px;background-color: #fefdfd;background-repeat: no-repeat;background-size: cover;"><span style="color: rgb(252,253,254);margin-left: 20px;margin-bottom: 0px;margin-top: 0px;">Aribisala Helen</span></a>
                        <nav
                            class="navbar navbar-dark fixed-top align-items-start" style="height: 1348px;width: 224px;background-color: #33343af0;margin-top: 201px;background-size: cover;">
                            <div class="container-fluid">
                                <ul class="nav navbar-nav text-light" id="accordionSidebar" style="margin-top: 11px;">
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="/index.html"><i class="fas fa-tachometer-alt"></i><span style="font-size: 18px;">DASHBOARD</span></a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="/total%20subscribers.html"><span>Total Subscribers</span></a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="/Smartphone%20Users.html"><span>Smartphone Users</span></a></li>
                                    <li class="nav-item" role="presentation"></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" href="/Blocked%20phone%20list.html"><span>Blocked Phone List</span></a><a class="nav-link" href="register.html"><span>Network Statistics</span></a><a class="nav-link" href="/Flagged%20Subscribers.html"><span>Flagged Subscribers</span></a></li>
                                </ul>
                            </div>
                </nav>
                </div>
                </nav>
            </div>
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
            search: "_INPUT_",
            searchPlaceholder: "Search records",
          }
  
        });

        $('#example1_filter input[type="search"]').addClass("bg-light border-light form-control border-0 small").css({'width': '316px','background-color': 'rgb(253,254,255)','font-size': '12px','font-family': 'century gothic'});
      });
    </script>
</body>

</html>