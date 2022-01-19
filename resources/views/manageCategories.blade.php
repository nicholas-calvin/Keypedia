@extends('navbar')

@section('content')
<div style="padding-top: 70px">
    <h3 class="d-flex justify-content-center">Manage Categories</h3>
</div>
<div class="d-flex justify-content-around container" style="padding: 2em 0 2em 0;" >
    <div class="row">
        @foreach ($categories as $category) 
        <div class="col-md-3" style="margin-right: 7em; margin-bottom: 2em">
            <div class="card mb-3" style="background-color: #baafd1; width: 400px; height: 460px;">
                <div class="card-body">
                    <div class="product-image-card d-flex justify-content-center">
                        <img src="{{asset($category->imgPath)}}" alt="Could not load image" srcset="" style="width: 350px;">
                    </div>
                    <div class="d-flex justify-content-center" style="color: black">
                     <label for="namaKeyboard" class="text-center">{{$category->name}}</label>
                    </div>
                    <div class="d-flex justify-content-around" style="margin-top: 1em">
                        <form action="/deleteCategory" method="post">
                            @csrf
                            <button type="submit" class="btn btn-primary">Delete Categories</button>
                        </form>
                        <a href="{{route('updateCategoryPage', ['categoryId'=>$category->id])}}">
                            <button class="btn btn-primary">Update Categories</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection