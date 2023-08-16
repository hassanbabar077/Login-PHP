@extends('Layout.app')
@section('content')
    <div class="container py-5 justify-content-center">
        @auth
            <div class="col-lg-12">
                <div class="card p-4">
                    <div class="first">
                        <h6 class="heading">My Profile</h6>
                    </div>
                    <div class=" second  flex-row mt-2">
                        <div class="image mr-3">
                            <img src="{{URL::asset('assets/img/Medicom-UDF-Despicable-Me-Minions-Bob-Ultra-Detail-Figure.jpg')}}" class="Image-fluid w-100 rounded-3" />
                        </div>
                        <div class="detail pt-2">
                            <p>Name : {{ auth()->user()->name }}</p>
                            <p>Email : {{ auth()->user()->email }}</p>
                        </div>
                    </div>
                    <hr class="line-color">
                    <div class="col-lg-12">
                        <p>Phone Number : {{ auth()->user()->phonenumber }}</p>
                        <p>Age : {{ auth()->user()->age }}</p>
                        <p>Date Of Birth : {{ auth()->user()->dob }}</p>
                        <p>Blood Group : {{ auth()->user()->bloodgroup }}</p>
                        <p>City : {{ auth()->user()->city }}</p>
                    </div>
                    <div class="third mt-4">
                        <a href="{{ route('edit.profile', auth()->user()->id) }}">Edit Profile</a>
                    </div>
                </div>
            </div>
        @endauth
    </div>
    </div>
@endsection
