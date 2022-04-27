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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
