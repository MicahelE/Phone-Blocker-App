<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Brand</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Amiri">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/fonts/fontawesome5-overrides.min.css?h=2c0fc24b3d3038317dc51c05339856d0">
    <link rel="stylesheet" href="/assets/css/styles.min.css?h=37e5519e2d0203c617714852a76d0b4e">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>

<body class="bg-gradient-primary" style="background-color: rgba(78,115,223,0);background-image: url(&quot;/assets/img/VOLAK-BUSINESS-PAGE.png?h=ba21608c6c00b57c1188c4533b664b34&quot;);">
    <nav class="navbar navbar-light navbar-expand" style="width: 1280px;height: 70px;margin: 0px 0px 24px;padding: 8px 16px;margin-left: 0px;background-color: #ffffff;">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="width: 985px;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation" style="width: 80px;height: 60px;background-image: url(&quot;/assets/img/logo-dash.png?h=33bb4bfd43d8957890b0d68275e30a48&quot;);">
                        <div></div>
                    </li>
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item" role="presentation"></li>
                </ul><a class="navbar-brand text-center d-flex justify-content-center align-items-center" href="#" style="width: 239px;margin-left: -87px;font-size: 14px;font-family: century gothic;">Volak Resources</a>
                <form class="form-inline d-none d-sm-inline-block mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group"></div>
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
                    <div class="d-none d-sm-block topbar-divider"></div>
                </ul>
            </div><span style="margin-right: 39px;font-family: CENTURY  GOTHIC;font-size: 13px;color: rgb(1,75,150);">DATABASE &amp; MOBILE PHONE SECURITY SYSTEM</span></div>
    </nav>
    <div class="container" style="width: 500px;height: 430px;margin-top: -72px;">
        <div class="row justify-content-center" style="width: 500px;height: 430px;">
            <div class="col-md-9 col-lg-12 col-xl-10" style="width: 500px;height: 430px;margin-left: -28px;margin-top: 38px;">
                <div class="card shadow-lg o-hidden border-0 my-5" style="width: 500px;height: 430px;background-color: rgba(17,10,10,0.38);margin-left: -19px;">
                    <div class="card-body p-0" style="height: 430px;">
                        <div class="row" style="width: 500px;height: 430px;">
                            <div class="col" style="width: 500px;height: 430px;">
                                <div class="p-5" style="height: 430px;width: 500px;padding-right: 49px;">
                                    <div class="text-center">
                                        <h4 class="mb-4" style="font-size: 32px;color: #fbfcfc;background-color: rgba(21,59,167,0);">LOGIN</h4>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('login') }}">
                                      @csrf
                                        <div class="form-group"><input class="form-control form-control-user @error('email') is-invalid @enderror" type="email" id="exampleInputEmail" aria-describedby="emailHelp" value="{{ old('email') }}" required autocomplete="email" placeholder="Enter Email Address..." name="email">
                                          @error('email')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                        </div>
                                        <div class="form-group"><input class="form-control form-control-user @error('password') is-invalid @enderror " type="password" id="exampleInputPassword" placeholder="Password" name="password" required autocomplete="current-password">
                                          @error('password')
                                          <span class="invalid-feedback" role="alert">
                                              <strong>{{ $message }}</strong>
                                          </span>
                                      @enderror
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1" style="color: rgb(251,251,251);" id="remember" {{ old('remember') ? 'checked' : '' }}>Remember Me</label>
                                                  {{-- <span class="form-check-sign"  for="remember"></span>
                                                  {{ __('Remember Me') }} --}}
                                                </div>
                                            </div>
                                        </div><button class="btn btn-primary btn-block text-white btn-user" >Login</button>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="#" style="color: rgb(246,247,248);">Forgot Password?</a></div>
                                    <div class="text-center"><a class="small" href="#" style="color: rgb(253,253,254);">Create an Account!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="/assets/js/script.min.js?h=c36e815cffc23831d7329b951063bde2"></script>
</body>

</html>