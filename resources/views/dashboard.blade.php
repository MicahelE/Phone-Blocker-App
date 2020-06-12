<!DOCTYPE html>
<html style="width: 956px;">

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
</head>

<body style="background-color: #d7d9e0;">
    <div>
        <nav class="navbar navbar-dark fixed-top align-items-start" style="height: 200px;width: 224px;background-color: #6f6f74;background-repeat: no-repeat;">
            <div class="container-fluid"><a href="#"><img class="border rounded-circle img-profile" src="/assets/img/Layer18.png?h=ffbc199f65eded4a1f743b6df8395df3" style="margin-left: 23px;margin-top: 40px;width: 100px;height: 100px;background-color: #fefdfd;background-repeat: no-repeat;background-size: cover;"><span style="color: rgb(252,253,254);margin-left: 20px;margin-bottom: 0px;margin-top: 0px;">Aribisala Helen</span></a>
                <nav
                    class="navbar navbar-dark fixed-top align-items-start" style="height: 1348px;width: 224px;background-color: #33343af0;margin-top: 201px;">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav text-light" id="accordionSidebar" style="margin-top: 11px;">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="/dashboard"><i class="fas fa-tachometer-alt"></i><span style="font-size: 18px;">DASHBOARD</span></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="/datatable"><span>Total Subscribers</span></a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="/smartusers"><span>Smartphone Users</span></a></li>
                            {{-- <li class="nav-item" role="presentation"><a class="nav-link" href="#"><span>Business subscribers</span></a></li> --}}
                            <li class="nav-item" role="presentation"><a class="nav-link" href="/blockedlines"><span>Blocked Phone List</span></a><a class="nav-link" href="#"><span>Network Statistics</span></a><a class="nav-link" href="/flagged"><span>Flagged Subscribers</span></a></li>
                        </ul>
                    </div>
        </nav>
        </div>
        </nav>
    </div>
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
    <div class="container" style="width: 1000px;height: 60px;margin-left: 216px;">
        <div style="width: 1000PX;margin-bottom: 0px;padding-bottom: 0px;margin-top: 0px;height: 45px;">
            <h1 style="font-size: 26px;color: rgb(252,252,252);margin-left: 18px;font-family: century gothic;"><strong>Welcome!</strong><a class="btn btn-primary btn-sm d-none d-sm-inline-block" role="button" href="{{ route('export') }}" style="margin-left: 703px;background-color: rgb(106,160,217);"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Generate Report</a></h1>
        </div>
    </div>
    <!-- Start: 1 Row 4 Columns -->
    <div style="margin-left: 221px;margin-bottom: 0px;width: 1000px;height: 300px;margin-top: -7px;padding-top: 0px;">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="width: 188.5px;">
                    <div class="card" style="width: 245px;height: 275px;">
                        <div class="card-header d-flex justify-content-between align-items-center" style="width: 245px;background-size: contain;background-repeat: no-repeat;background-color: rgba(86,61,186,0.62);height: 76px;">
                            <h6 class="font-weight-bold m-0" style="color: rgb(254,254,254);font-family: century gothic;">Total Subscribers</h6>
                            <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                    role="menu">
                                    <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                            </div>
                        </div>
                        <div class="card-body" style="width: 245px;background-color: rgba(250,249,251,0);margin-top: 55px;"><a class="card-link flash animated" href="#" style="color: rgb(41,13,101);font-size: 27px;margin-left: 79px;margin-top: -28px;margin-bottom: 3px;">&nbsp;{{$data}}  </a>
                            <div class="chart-area" style="width: 206px;margin-right: 0px;margin-top: -98px;"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Male&quot;,&quot;Female&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;13&quot;,&quot;11&quot;,&quot;&quot;]},{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[],&quot;borderColor&quot;:[],&quot;data&quot;:[]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{}}}"></canvas></div>
                            <div
                                class="text-center small mt-4"><span class="mr-2"><i class="fas fa-circle text-primary"></i>&nbsp;Male</span><span class="mr-2"><i class="fas fa-circle text-success"></i>&nbsp;Female</span></div>
                    </div>
                    <div class="card-body"></div>
                </div>
            </div>
            <div class="col-md-3" style="height: 275px;width: 188.5px;padding-left: 24px;margin-left: -5px;">
                <div class="card" style="width: 245px;height: 275px;">
                    <div class="card-header d-flex justify-content-between align-items-center" style="width: 245px;background-repeat: no-repeat;background-size: cover;background-color: rgba(170,60,120,0.58);font-family: century gothic;color: rgb(253,254,255);">
                        <h6 class="font-weight-bold m-0">Top Users Network</h6>
                        <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                            <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                role="menu">
                                <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a><a class="dropdown-item" role="presentation" href="#">Menu Item</a></div>
                        </div>
                    </div>
                    <div class="card-body">
                        <h4 class="small font-weight-bold">Airtel<span class="float-right">37%</span></h4>
                        <div class="progress rubberBand animated mb-4" style="opacity: 0.62;">
                            <div class="progress-bar bg-danger progress-bar-animated" aria-valuenow="37" aria-valuemin="0" aria-valuemax="100" style="width: 37%;"><span class="sr-only">37%</span></div>
                        </div>
                        <h4 class="small font-weight-bold">MTN<span class="float-right">43%</span></h4>
                        <div class="progress rubberBand animated mb-4" style="opacity: 0.62;">
                            <div class="progress-bar bg-warning" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100" style="width: 43%;"><span class="sr-only">43%</span></div>
                        </div>
                        <h4 class="small font-weight-bold">Glo<span class="float-right">20%</span></h4>
                        <div class="progress rubberBand animated mb-4" style="opacity: 0.62;">
                            <div class="progress-bar bg-success" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%;"><span class="sr-only">20%</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3" style="padding-left: 33px;width: 188.5px;margin-left: -5px;">
                <div class="card" style="width: 245px;height: 275px;background-color: #ffffff;">
                    <div class="card-header d-flex justify-content-between align-items-center" style="width: 245px;background-color: rgba(62,134,176,0.46);color: rgb(246,248,249);">
                        <h6 class="font-weight-bold m-0" style="color: #fafbfc;font-family: century gothic;">Blocked Phones</h6>
                        <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                            <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                role="menu">
                                <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                        </div>
                    </div><a class="flash animated" href="#" style="width: 56px;margin-left: 26px;margin-top: 20px;color: rgb(3,87,123);font-size: 28px;">{{$unblock}}</a>
                    <div class="card-body flash animated" style="width: 250px;background-image: url(&quot;/assets/img/locked.png?h=837ad4775902d64067ac0dcfaead249a&quot;);height: 218px;margin-top: -60px;"></div>
                </div>
            </div>
            <div class="col-md-3" style="padding-left: 33px;width: 188.5px;margin-left: 4px;">
                <div class="card" style="width: 245px;height: 275px;background-color: #ffffff;">
                    <div class="card-header d-flex justify-content-between align-items-center" style="width: 245px;background-color: rgba(213,133,59,0.59);color: rgb(246,248,249);">
                        <h6 class="font-weight-bold m-0" style="color: #fafbfc;font-family: century gothic;">Unblocked Phones</h6>
                        <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                            <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                role="menu">
                                <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                        </div>
                    </div><a class="flash animated" href="#" style="width: 56px;margin-left: 179px;margin-top: 20px;color: rgb(135,74,3);font-size: 28px;">{{$block}}</a>
                    <div class="card-body flash animated" style="width: 250px;background-image: url(&quot;/assets/img/unlock.png?h=f1cec50f406123c60967bbb07eb9a8ba&quot;);height: 218px;margin-top: -60px;"></div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- End: 1 Row 4 Columns -->
    <!-- Start: 1 Row 4 Columns -->
    <div style="margin-left: -16px;">
        <div class="container">
            <div class="row" style="margin-left: 228px;margin-bottom: -21px;width: 1200px;margin-top: -34px;">
                <div class="col-lg-7 col-xl-8" style="padding-top: 17px;width: 496px;margin-left: -8px;padding-right: 0px;padding-left: 0px;">
                    <div class="card shadow mb-4" style="width: 480px;margin-left: 17px;height: 262px;">
                        <div class="card-header d-flex justify-content-between align-items-center" style="background-color: rgb(47,53,71);padding-top: 12px;">
                            <h6 class="font-weight-bold m-0" style="color: rgb(251,247,247);font-family: century gothic;">New Subscriber Weekly Report</h6>
                            <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                    role="menu">
                                    <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                            </div>
                        </div>
                        <div class="card-body" style="background-color: #2f3547;">
                            <div class="chart-area" style="background-color: #2f3547;"><canvas data-bs-chart="{&quot;type&quot;:&quot;line&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Mon&quot;,&quot;Tue&quot;,&quot;Wed&quot;,&quot;Thurs&quot;,&quot;Fri&quot;,&quot;Sat&quot;,&quot;Sun&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;Earnings&quot;,&quot;fill&quot;:true,&quot;data&quot;:[&quot;0&quot;,&quot;10000&quot;,&quot;5000&quot;,&quot;15000&quot;,&quot;10000&quot;,&quot;20000&quot;,&quot;15000&quot;,&quot;25000&quot;],&quot;backgroundColor&quot;:&quot;rgba(78, 115, 223, 0.05)&quot;,&quot;borderColor&quot;:&quot;rgba(78, 115, 223, 1)&quot;}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:false},&quot;title&quot;:{},&quot;scales&quot;:{&quot;xAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;],&quot;drawOnChartArea&quot;:false},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}],&quot;yAxes&quot;:[{&quot;gridLines&quot;:{&quot;color&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;zeroLineColor&quot;:&quot;rgb(234, 236, 244)&quot;,&quot;drawBorder&quot;:false,&quot;drawTicks&quot;:false,&quot;borderDash&quot;:[&quot;2&quot;],&quot;zeroLineBorderDash&quot;:[&quot;2&quot;]},&quot;ticks&quot;:{&quot;fontColor&quot;:&quot;#858796&quot;,&quot;padding&quot;:20}}]}}}"></canvas></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-right: -4px;margin-left: -281px;margin-top: 9px;"><img style="background-image: url(&quot;/assets/img/locations.png?h=856df217e0e6037ab245271d0feec0ea&quot;);width: 522px;height: 262px;margin-left: -28px;margin-top: 9px;margin-bottom: -77px;"><a class="flash animated infinite" href="#" style="margin-left: 242px;height: 11px;background-repeat: no-repeat;margin-top: 218px;margin-right: 3px;background-image: url(&quot;/assets/img/beeper.png?h=fd169c299a6fcfa6bb6dfae694e8f1e5&quot;);width: 31px;color: rgba(0,123,255,0);padding: 0px;">po</a></div>
            </div>
        </div>
    </div>
    <!-- End: 1 Row 3 Columns -->
    <!-- Start: 1 Row 3 Columns -->
    <div style="margin-left: 223px;width: 1000px;margin-top: 8px;">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card" style="width: 350px;height: 275px;">
                        <div class="card-header d-flex justify-content-between align-items-center" style="width: 350px;background-size: contain;background-repeat: no-repeat;background-color: rgba(133,128,154,0.62);">
                            <h6 class="font-weight-bold m-0" style="color: rgb(254,254,254);font-family: century gothic;">Age Cohort of Subscribers</h6>
                            <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                    role="menu">
                                    <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                            </div>
                        </div>
                        <div class="card-body" style="width: 350px;background-color: rgba(250,249,251,0);">
                            <div class="chart-area" style="width: 289px;height: 148px;margin-top: 14px;"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;4-14&quot;,&quot;15-21&quot;,&quot;22-37&quot;,&quot;38-53&quot;,&quot;54-72&quot;,&quot;73*&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;#4e73df&quot;,&quot;#1cc88a&quot;,&quot;#36b9cc&quot;,&quot;rgb(149,41,41)&quot;,&quot;rgb(167,102,41)&quot;,&quot;rgb(145,147,31)&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;2&quot;,&quot;15&quot;,&quot;36&quot;,&quot;30&quot;,&quot;12&quot;,&quot;5&quot;]},{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[],&quot;borderColor&quot;:[],&quot;data&quot;:[]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:true,&quot;position&quot;:&quot;right&quot;},&quot;title&quot;:{&quot;display&quot;:false}}}"></canvas></div>
                        </div>
                        <div class="card-body" style="width: 50px;height: 200px;"></div>
                    </div>
                </div>
                <div class="col-md-4" style="margin-left: -11px;">
                    <div class="card" style="width: 300px;height: 275px;margin: 8px;margin-top: 0px;margin-right: 1px;margin-left: 41px;">
                        <div class="card-header d-flex justify-content-between align-items-center" style="width: 300px;background-size: contain;background-repeat: no-repeat;background-color: rgba(61,186,134,0.62);height: 76px;">
                            <h6 class="font-weight-bold m-0" style="color: rgb(254,254,254);font-family: century gothic;">Registered Lines</h6>
                            <div class="dropdown no-arrow"><button class="btn btn-link btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button"><i class="fas fa-ellipsis-v text-gray-400"></i></button>
                                <div class="dropdown-menu shadow dropdown-menu-right animated--fade-in"
                                    role="menu">
                                    <p class="text-center dropdown-header">dropdown header:</p><a class="dropdown-item" role="presentation" href="#">&nbsp;Action</a><a class="dropdown-item" role="presentation" href="#">&nbsp;Another action</a>
                                    <div class="dropdown-divider"></div><a class="dropdown-item" role="presentation" href="#">&nbsp;Something else here</a></div>
                            </div>
                        </div>
                        <div class="card-body" style="width: 245px;background-color: rgba(250,249,251,0);margin-top: 55px;"><a class="card-link flash animated" href="#" style="color: rgb(41,13,101);font-size: 27px;margin-left: 102px;margin-top: -28px;margin-bottom: 3px;">&nbsp;60</a>
                            <div class="chart-area" style="width: 250px;margin-right: 0px;margin-top: -98px;height: 188px;"><canvas data-bs-chart="{&quot;type&quot;:&quot;doughnut&quot;,&quot;data&quot;:{&quot;labels&quot;:[&quot;Business&quot;,&quot;Private&quot;],&quot;datasets&quot;:[{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[&quot;rgba(220,78,223,0.57)&quot;,&quot;#8c8d9a&quot;,&quot;#36b9cc&quot;],&quot;borderColor&quot;:[&quot;#ffffff&quot;,&quot;#ffffff&quot;,&quot;#ffffff&quot;],&quot;data&quot;:[&quot;23&quot;,&quot;37&quot;,&quot;&quot;]},{&quot;label&quot;:&quot;&quot;,&quot;backgroundColor&quot;:[],&quot;borderColor&quot;:[],&quot;data&quot;:[]}]},&quot;options&quot;:{&quot;maintainAspectRatio&quot;:false,&quot;legend&quot;:{&quot;display&quot;:true,&quot;position&quot;:&quot;bottom&quot;},&quot;title&quot;:{}}}"></canvas></div>
                        </div>
                        <div class="card-body">
                            <div class="text-center small mt-4" style="margin-top: -1px;padding-top: -44px;"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="width: 344px;">
                    <div class="card" style="background-color: rgba(255,255,255,0);height: 275px;width: 322px;margin-top: 0px;padding-top: 0Px;margin-left: 26px;">
                        <div class="card-header" style="background-image: url(&quot;/assets/img/new-sim-reg.png?h=ae586fbd743f4ae88924a022ef9479ab&quot;);width: 325px;background-repeat: no-repeat;margin-top: -2px;margin-bottom: 1px;height: 155px;"></div>
                        <div class="card-body" style="background-image: url(&quot;/assets/img/new-sim-reg.png?h=ae586fbd743f4ae88924a022ef9479ab&quot;);height: 430px;background-repeat: no-repeat;background-size: cover;background-color: rgba(255,255,255,0);margin-top: -73px;width: 325px;">
                            <h4 class="card-title" style="color: rgb(252,253,254);font-size: 40px;width: 298px;margin-top: -25px;">20%<i class="fa fa-caret-up" style="margin-left: 21px;width: 36px;height: 37px;"></i><i class="fa fa-caret-up flash animated infinite" style="margin-left: -36px;width: 36px;height: 37px;padding: 0px;color: rgb(84,121,159);"></i>
                                <i
                                    class="fa fa-refresh" style="margin-left: 118px;width: 31px;font-size: 34px;"></i>
                            </h4>
                            <h6 class="card-subtitle mb-2" style="background-color: rgba(255,255,255,0);color: rgb(253,253,254);">New SIM Registration</h6><a class="card-link" href="#" style="color: rgb(252,253,254);font-size: 17px;margin-left: 236px;margin-bottom: 0px;">3,152</a><a class="card-link" href="#" style="color: rgb(251,252,254);font-size: 10px;margin-left: 210px;margin-top: 0px;">(24/06/2020)</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End: 1 Row 3 Columns -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="assets/js/script.min.js?h=c36e815cffc23831d7329b951063bde2"></script>
    <script >$(document).ready(function(){

        $('[data-bs-chart]').each(function(index, elem) {
            this.chart = new Chart($(elem), $(elem).data('bs-chart'));
        });
    
    });
        </script>
</body>

</html>