
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Client Login - Ben Middleton</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ben Middleton - Computer Scientist" />
    <meta name="keywords" content="Website Design, Application Design, Software Design, Plymouth" />
    <meta name="author" content="Ben Middleton" />
    <meta name="Version" content="2.0" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons -->
    <link href="/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Main Css -->
    <link href="/css/style.css" rel="stylesheet" type="text/css" />
    <link href="/css/colors/default.css" rel="stylesheet">

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
            </div>
        </div>
    </div>
    <!-- Loader -->

    <div class="back-to-home rounded d-none d-sm-block">
        <a href="/" class="text-white rounded d-inline-block text-center"><i class="mdi mdi-home"></i></a>
    </div>

    <!-- Hero Start -->
    <section class="bg-home d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6">
                    <div class="mr-lg-5">
                        <img src="images/user/login.png" class="img-fluid d-block mx-auto" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                    <div class="login-page bg-white shadow rounded p-4">
                        <div class="text-center">
                            <h4 class="mb-4">{{ __('Login') }}</h4>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label for="email">{{ __('E-Mail Address') }}<span class="text-danger">*</span></label>
                                        <i class="mdi mdi-account ml-3 icons"></i>
                                        <input id="email" type="email" class="form-control pl-5 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Johndow@gmail.com" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror


                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="form-group position-relative">
                                        <label for="password">{{ __('Password') }}<span class="text-danger">*</span></label>
                                        <i class="mdi mdi-key ml-3 icons"></i>
                                        <input id="password" type="password" class="form-control pl-5 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <p class="float-right forgot-pass"><a class="text-dark font-weight-bold">
                                        @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                        @endif</p>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember">
                                                {{ __('Remember Me') }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12 mb-0">
                                    <button type="submit" class="btn btn-primary w-100">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                                <div class="col-lg-12 mt-4 text-center">
                                    <h6>Or Login With</h6>
                                    <ul class="list-unstyled social-icon mb-0 mt-3">
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-facebook" title="Facebook"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-google-plus" title="Google"></i></a></li>
                                        <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i class="mdi mdi-github-circle" title="Github"></i></a></li>
                                    </ul><!--end icon-->
                                </div>
                                <div class="col-12 text-center">
                                    <p class="mb-0 mt-3"><small class="text-dark mr-2">Don't have an account ?</small> <a href="{{ __('register') }}" class="text-dark font-weight-bold">Sign Up</a></p>
                                </div>
                            </div>
                        </form>
                    </div><!---->
                </div> <!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <!-- Hero End -->

    <!-- javascript -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrollspy.min.js"></script>

    <!-- Main Js -->
    <script src="js/app.js"></script>
</body>
</html>
