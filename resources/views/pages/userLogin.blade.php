@extends('layout.without')
@section('content')

<div class="container-fluid px-1" ">
    <div class="card card0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 ">
                    <div class="row"><img src="{{ asset('photo/logo1.png') }}" class="logo" alt=""></div>
                    <div class="row justify-content-center mt-4 mb-5 border-line" class="image"><img src="{{ asset('cover_photo/images1.png') }}" alt=""></div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row mb-4 px-3">
                        <h6 class="mb-0 mr-4 mt-2">Sign In with</h6>
                        <div class="facebook text-center mr-3">
                            <div class="fa fa-facebook"></div>
                        </div>
                        <div class="google text-center mr-3">
                            <div class="fa fa-google"></div>
                        </div>
                        <div class="linkedin text-center mr-3">
                            <div class="fa fa-linkedin"></div>
                        </div>
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div>
                        <small class="or text-center">Or</small>
                        <div class="line"></div>
                    </div>
                    <div class="row px-3">
                        <label class="mb-1" for=""><h6 class="mb-0 text-sm ">Email Address</h6></label>
                        <input class="mb-4"type="text" name="email" placeholder="Enter Email address">
                    </div>
                    <div class="row px-3"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">Password</h6>
                    </label> <input type="password" name="password" placeholder="Enter password">
                    </div>
                    <div class="row px-3 mb-4">
                        <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Remember me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Forgot Password?</a>
                    </div>
                    <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center" id="button">Login</button> </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Don't have an account? <a class="text-danger ">Register</a></small> </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
