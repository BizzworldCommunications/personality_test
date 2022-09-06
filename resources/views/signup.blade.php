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

                  <h4>Create Your Account</h4>

                    <div class="signup-block mt-3">
                        <form class="signup-form" method="POST" action="">
                            <input type="hidden" name="_token" value="uHuBrLD0zS9yto6XLAQMcVRZoutezsI35euz6or7">                                <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <input type="text" class="form-control" name="fname" value="" id="fname" placeholder="First Name">
                                                                                </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <input type="text" class="form-control" name="lname" value="" id="lname" placeholder="Last Name">
                                                                                </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                                        <input type="email" class="form-control" name="email" value="" id="email" placeholder="Email">
                                                                                </div>
                                </div>
                                <div class="col-lg-6">
                                                                            <div class="form-group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                        <input type="text" class="form-control" name="mobile" value="" id="mobile" placeholder="Mobile">
                                                                                </div>
                                                                        </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                                                                </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-lock"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password" required="">
                                    </div>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="form-check text-center">
                                    <input class="form-check-input" type="checkbox" name="term" id="term" required="">

                                    <label class="form-check-label" for="term">
                                        <div class="signin-link text-center btm-20">
                                            <b>I agree to <a href="" title="Policy">Terms&amp;Condition </a>, <a href="" title="Policy">PrivacyPolicy.</a></b>
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <button type="submit" title="Sign Up" class="btn btn-primary">Signup</button>

                        </form>


                        <div class="sign-up text-center" style="color: #043740;font-size: 13px;padding-top: 16px;">Already have an account?<a
                            href="{{url('/login')}}" title="sign-up" style="color: #043740;font-size: 13px;"> Login</a>
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