@extends('navbar')
@section('content')
<div class="container-md" style="padding: 2em; width: 1200px; height: 830px;">
    <div class="login-form" style="background-color: #b4a8cb;">

        <div style="border-bottom-style: solid; border-bottom-color: #afa3c4;">
            <label style="padding: 1em;">Add Keyboard</label>
        </div>
        <div style="background-color: #baaed1;" class="d-flex justify-content-around">
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('error')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div style="background-color: #baaed1; margin-left: 0; margin-right: 0; padding: 2em;">
            <form action="/keyboard/add" method="post">
                @csrf
                <div class="row justify-content-center" style="margin-bottom: 1em;">
                    <div class="col-4 text-end">
                        <label for="Category">Category</label>
                    </div>
                    <div class="col-6">
                        <select aria-label="Default select example" name="keyboardCategory" id="keyboardCategory" class="@error('keyboardCategory') is-invalid @enderror">
                            <option selected disabled value="" style="background-color: black">Category</option>
                            @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                        @error('keyboardCategory')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center align-items-center" style="margin-bottom: 1em;">
                    <div class="col-4 text-end">
                        <label for="Keyboard Name">Keyboard name</label>
                    </div>
                    <div class="col-6">
                        <input type="text" name="keyboardName" class="rounded-3 w-75 @error('keyboardName') is-invalid @enderror" id="keyboardName" style="height: 50px" value="{{old('keyboardName')}}">
                        @error('keyboardName')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center align-items-center" style="margin-bottom: 1em;">
                    <div class="col-4 text-end">
                        <label for="Keyboard Price">Keyboard Price ($)</label>
                    </div>
                    <div class="col-6">
                        <input type="text" name="keyboardPrice" class="rounded-3 w-75 @error('keyboardPrice') is-invalid @enderror" id="keyboardPrice" style="height: 50px" value="{{old('keyboardPrice')}}">
                        @error('keyboardPrice')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center" style="margin-bottom: 1em;">
                    <div class="col-4 text-end">
                        <label for="Description">Description</label>
                    </div>
                    <div class="col-6">
                        <textarea name="keyboardDescription" id="description" rows="3" class="rounded-3 w-75 @error('keyboardDescription') is-invalid @enderror" value="{{old('keyboardDescription')}}"></textarea>
                        @error('keyboardDescription')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center" style="margin-bottom: 1em;">
                    <div class="col-4 text-end">
                        <label for="Keyboard Image">Keyboard Image</label>
                    </div>
                    <div class="col-6">
                        <input name="keyboardImage" class="form-control rounded-3 w-75 @error('keyboardImage') is-invalid @enderror" type="file" id="keyboardImage">
                        @error('keyboardImage')
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-4 text-end"></div>
                    <div class="col-6" style="margin-top: 1em;">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection