@extends('layout.without')
@section('content')

<div class="container-fluid px-1" ">
    <div class="card card0">
        <div class="row d-flex">

            <div class="col-lg-6">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row px-3">
                        <button type="button" class="btn btn-outline-secondary btn-lg btn-block mb-4" class="google-button"><img src="{{ asset('cover_photo/google.png') }}" alt="" class="google-image"><span class="image-span">sign in with google</span></button>

                    </div>
                    <div class="row px-3 mb-4">
                        <div class="line"></div>
                        <small class="or text-center">Or</small>
                        <div class="line"></div>
                    </div>
                    <div class="row px-3">
                        <label class="mb-1" for=""><h6 class="mb-0 text-sm ">Full Name</h6></label>
                        <input class="mb-4"type="text" name="email" placeholder="Enter Email address">
                    </div>
                    <div class="row px-3">
                        <label class="mb-1" for=""><h6 class="mb-0 text-sm ">Email Address</h6></label>
                        <input class="mb-4"type="text" name="email" placeholder="Enter Email address">
                    </div>
                    <div class="row px-3 mb-4"> <label class="mb-1">
                        <h6 class="mb-0 text-sm">Password</h6>
                    </label> <input type="password" name="password" placeholder="Enter password">
                    </div>

                    <div class="row mb-3 px-3"> <button type="button" class="btn btn-primary btn-lg btn-block">Register</button> </div>
                    <div class="row mb-4 px-3"> <small class="font-weight-bold">Already have an account? <a class="text-danger ">Login</a></small> </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card1 ">
                    <div class="row"><img src="{{ asset('photo/logo1.png') }}" class="logo" alt=""></div>
                    <div class="row justify-content-center mt-4 mb-5 border-line" class="image"><img src="{{ asset('cover_photo/images1.png') }}" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
