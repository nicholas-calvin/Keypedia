@extends('navbar')

@section('content')
    <div>
        <h1 class="d-flex justify-content-center" style="padding-top: 0.5em">Welcome to Keypedia</h1>
        <h6 class="d-flex justify-content-center">Best Keyboard and Keycaps Shop</h6>
        <br>
        <h3 class="d-flex justify-content-center">Categories</h3>
    </div>
    <div class="d-flex justify-content-around container" style="padding: 2em 0 2em 0;" >
        <div class="row">
            @foreach ($categories as $category) 
            <div class="col-md-3" style="margin-right: 7em; margin-bottom: 2em">
                <div class="card mb-3" style="background-color: #baafd1; width: 400px; height: 500px;">
                    <a href="{{route('category', ['categoryId'=>$category->id])}}" style="text-decoration: none;">
                        <div class="card-body">
                            <div class="d-flex justify-content-center" style="height: 90px; margin: 10px; padding: 20px; align-items: center; border-style: solid; border-color: #afa3c4;">
                                <label for="namaKeyboard" class="text-center">{{$category->name}}</label>
                            </div>
                            <div class="product-image-card d-flex justify-content-center">
                                <img src="{{asset($category->imgPath)}}" alt="Could not load image" srcset="" style="width: 350px;">
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection