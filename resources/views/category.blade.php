@extends('navbar')

@section('content')
<div class="container mb-5">
    <h3 style="padding-top: 1em">{{$categoryName}}</h3>
    <div class="content d-flex mt-4">
        <div class="category-list me-4" style="width: 200px; border-right: black 1px solid; padding-right: 2em;">
            <ul class="list-category">
                @foreach($categories as $category)
                <li><a class="text-decoration-none"  style="color: black" href="{{route('category',['categoryId'=>$category->id])}}">{{$category->name}}</li>
                @endforeach
            </ul>
        </div>
        <div class="category-content">
            <div class="row">
                @foreach($keyboardCategories as $keyboards)
                <div class="col-3">
                    <div class="card mb-3 pb-4">
                        <a href="{{route('keyboardDetail', ['keyboardId'=>$keyboards->id])}}" style="text-decoration: none; color: black;">
                            <div class="card-body">
                                <div class="product-image-card d-flex justify-content-center mb-2">
                                    <img src="{{asset($keyboards->imgPath)}}" alt="" class="img-thumbnail img-fluid">
                                </div>
                                <div class="product-detail-card">
                                    <strong class="mb-1">{{$keyboards->name}}</strong>
                                    <p class="m-0">Rp. {{$keyboards->price}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>

</div>
@endsection