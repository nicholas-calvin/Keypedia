@extends('layout')

@section('content')
    @if(session()->has('success'))  
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{session('success')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session()->has('loginError'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{session('loginError')}}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="container-md" style="padding: 2em;">
        <div class="login-form" style="background-color: #b4a8cb;">

            <div style="border-bottom-style: solid; border-bottom-color: #afa3c4;">
                <label style="padding: 1em;">Login</label>
            </div>

            <div style="background-color: #baaed1; margin-left: 0; margin-right: 0; padding: 2em;">
                {{-- <div class="kanan">
                    <button>Manager</button>
                </div>
                <div class="kiri">
                    <button>User</button>
                </div> --}}
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('success')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form action="/login" method="post">
                    @csrf
                    <div class="row justify-content-center" style="margin-bottom: 1em;">
                        <div class="col-4 text-end">
                            <label for="email">E-Mail Adress</label>
                        </div>
                        <div class="col-6">
                            <input type="email" class="rounded-3 w-75" name="email" id="email" autofocus>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4 text-end">
                            <label for="password">Password</label>
                        </div>
                        <div class="col-6">
                            <input type="password" class="rounded-3 w-75" name="password" id="password">
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4 text-end"></div>
                        <div class="col-6" style="margin-top: 1em;">
                            <input class="form-check-input" type="checkbox" id="remember_me" value="remember_me" name="remember_me">
                            <label class="form-check-label" for="remember_me">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-4 text-end"></div>
                        <div class="col-6" style="margin-top: 1em;">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection