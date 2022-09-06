@extends('layout.apptheme')
@section('content')
<section id="signup" class="signup-block-main-block">
<div class="container">
    <div class="login-signup">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="signup-side-block">
                    <img src="{!! asset('public/images/login.png') !!}" class="img-fluid" alt="">
                    <div class="login-img">
                        <img src="{!! asset('public/images/abc.jpg') !!}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6" style="margin-top: 75px;">
                <div class="signup-heading">

                  <h4>Login in to Your Account</h4>

                    <div class="signup-block mt-3">
                        <form method="POST" class="signup-form" action="">
                            <input type="hidden" name="" value="">
                            <div class="form-group">
                                <svg xmlns="" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-mail">
                                    <path
                                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                    </path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>
                                <input id="email" type="email" class="form-control" placeholder="Enter Your E-Mail"
                                    name="email" value="" required="" autofocus="">

                            </div>

                            <div class="form-group">
                                <svg xmlns="" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-lock">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
                                </svg>
                                <input id="password" type="password" class="form-control"
                                    placeholder="Enter Your Password" name="password" required="">

                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="form-group">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember"
                                                id="remember">

                                            <label class="form-check-label" for="remember" style="color: #043740;">
                                                Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-6">
                                    <div class="forgot-password text-right btm-20"><a href=""
                                            title="sign-up" style="color: #043740;">Forgot Password</a>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>
                        </form>


                        <div class="sign-up text-center" style="color: #043740;font-size: 13px;">Do not have an account?<a
                            href="{{url('/signup')}}" title="sign-up" style="color: #043740;font-size: 13px;"> Signup</a>
                        </div>
                        <hr>
                        <div class="signin-link text-center" style="color: #043740;font-size: 13px;">
                            By Signing up <a href=""
                                title="Policy">Terms & Condition </a>, <a
                                href=""
                                title="Policy">PrivacyPolicy.</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</section>
@endsection