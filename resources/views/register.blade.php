@extends('layout')
@section('content')
<div class="container-md" style="padding: 2em;">
        <div class="login-form" style="background-color: #b4a8cb;">

            <div style="border-bottom-style: solid; border-bottom-color: #afa3c4;">
                <label style="padding: 1em;">Register</label>
            </div>

            <div style="background-color: #baaed1; margin-left: 0; margin-right: 0; padding: 2em;">
                <form action="/register" method="post">
                    @csrf
                    <div class="row justify-content-center" style="margin-bottom: 1em;">
                        <div class="col-4 text-end">
                            <label for="username">Username</label>
                        </div>
                        <div class="col-6">
                            <input type="username" class="form-control rounded-3 w-75 @error('username') is-invalid @enderror" name="username" id="username" autofocus required value="{{old('username')}}">
                            @error('username')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center" style="margin-bottom: 1em;">
                        <div class="col-4 text-end">
                            <label for="email">E-Mail Address</label>
                        </div>
                        <div class="col-6">
                            <input type="email" class="form-control rounded-3 w-75 @error('email') is-invalid @enderror" name="email" id="email" required value="{{old('email')}}">
                            @error('email')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center" style="margin-bottom: 1em;">
                        <div class="col-4 text-end">
                            <label for="password">Password</label>
                        </div>
                        <div class="col-6">
                            <input type="password" class="form-control rounded-3 w-75 @error('password') is-invalid @enderror" name="password" id="password" required>
                            @error('password')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center" style="margin-bottom: 1em;">
                        <div class="col-4 text-end">
                            <label for="confirmPassword">Confirm Password</label>
                        </div>
                        <div class="col-6">
                            <input type="Password" class="form-control rounded-3 w-75 @error('password_confirmation') is-invalid @enderror" name="password_confirmation" id="password_confirmation" required>
                            @error('password_confirmation')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center" style="margin-bottom: 1em;">
                        <div class="col-4 text-end">
                            <label for="confirmPassword">Address</label>
                        </div>
                        <div class="col-6">
                            <textarea name="address" id="address" rows="5" class="form-control rounded-3 w-75 @error('address') is-invalid @enderror"></textarea required value="{{old('address')}}">
                            @error('address')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center" style="margin-bottom: 1em;">
                        <div class="col-4 text-end">
                            <label for="gender">Gender</label>
                        </div>
                        <div class="col-6">
                            <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="male" value="male" required value="{{old('gender')}}">
                            <label class="form-check-label" for="male">Male</label>
                            <input class="form-check-input @error('gender') is-invalid @enderror" type="radio" name="gender" id="female" value="female" required value="{{old('gender')}}">
                            <label class="form-check-label" for="female">Female</label>
                        </div>
                    </div>
                    <div class="row justify-content-center" style="margin-bottom: 1em;">
                        <div class="col-4 text-end">
                            <label for="dob">Date of Birth</label>
                        </div>
                        <div class="col-6">
                            <input type="date" class="form-control datepicker rounded-3 w-75 @error('dob') is-invalid @enderror" name="dob" id="dob"  required value="{{old('dob')}}">
                            @error('dob')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4 text-end">
                        </div>
                        <div class="col-6">
                            <button type="login" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection