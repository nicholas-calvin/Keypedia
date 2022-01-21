@extends('navbar')
@section('content')
<div class="container" style="padding: 2em; padding-top: 3em; width: 1200px; height: 830px;">
    <div class="" style="background-color: #b4a8cb;">

        <div style="border-bottom-style: solid; border-bottom-color: #afa3c4;">
            <label style="padding: 1em;">Update Category</label>
        </div>
        @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div style="background-color: #baaed1; margin-left: 0; margin-right: 0; padding: 2em;" class="d-flex justify-content-around">
            <div class="col-5 d-flex align-items-center">
                <img src="{{asset($category->imgPath)}}" alt="Could not load image" srcset="" style="width: 380px;">
            </div>
            <div class="col-7" style="margin-left: -2em">
                <form action="/category/updateCategory/{{$category->id}}" method="post">
                    @csrf
                    <div class="Judul mb-3 d-flex justify-content-evenly">
                        <h6><label for="Category Name">Category Name</label></h6>
                        <input type="text" name="categoryName" id="categoryName" placeholder="{{$category->name}}" style="border: none; border-radius: 5px; height: 40px; width: 300px">
                    </div>
                    <div class="Judul mb-3 d-flex justify-content-evenly">
                        <h6><label for="Category Image">Category Image</label></h6>
                        <input class="form-control rounded-3" type="file" id="formFile" name="categoryImage" style="border: none; border-radius: 5px; width: 300px">
                    </div>
                    <div  class="d-flex justify-content-center">
                        @method('put')
                        <button class="btn btn-primary" style="margin-top: 1em;">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection