@extends('navbar')
@section('content')
<div class="container-md" style="padding: 2em; width: 1200px; height: 830px;">
    <div class="login-form" style="background-color: #b4a8cb;">

        <div style="border-bottom-style: solid; border-bottom-color: #afa3c4;">
            <label style="padding: 1em;">Change Password</label>
        </div>

        <div style="background-color: #baaed1; margin-left: 0; margin-right: 0; padding: 2em;">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('success')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <form action="/changePassword" method="post">
                @csrf
                <div class="row justify-content-center">
                    <div class="col-4 text-end">
                        <label for="currentPassword">Current Password</label>
                    </div>
                    <div class="col-6 mb-3">
                        <input type="password" class="rounded-3 w-75 @error('currentPassword') is-invalid @enderror" name="currentPassword" id="currentPassword" autofocus>
                        @error('currentPassword')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4 text-end">
                        <label for="newPassword">New Password</label>
                    </div>
                    <div class="col-6 mb-3">
                        <input type="password" class="rounded-3 w-75 @error('newPassword') is-invalid @enderror" name="newPassword" id="newPassword">
                        @error('newPassword')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4 text-end">
                        <label for="newPassword_confirmation">New Confirm Password</label>
                    </div>
                    <div class="col-6 mb-3">
                        <input type="password" class="rounded-3 w-75 @error('newPassword_confirmation') is-invalid @enderror" name="newPassword_confirmation" id="newPassword_confirmation">
                        @error('newPassword_confirmation')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6" style="margin-top: 1em; margin-left: 20em">
                        <button type="submit" class="btn btn-primary">Update Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection