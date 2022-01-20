@extends('navbar')

@section('content')
<div class="container mb-5">
    <div style="height: 2em"></div>
    <div style="background-color: #b2e3dd;" class="d-flex justify-content-center">
        <h1>{{$categoryName}}</h1>
    </div>
    <form class="d-flex mt-4" action="{{route('showCategorySearched')}}" method="get">
        <span class="d-flex align-items-center">
            <input type="search" placeholder="Search..." style="height: 2em;">
        </span>
        <span class="d-flex align-items-center" style="margin-left: 1em; margin-right: 1em;">
            <select aria-label="Default select example" name="keyboardCategory" id="keyboardCategory" class="@error('keyboardCategory') is-invalid @enderror">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
              </select>
        </span>
        <span class="d-flex align-items-center">
            <button class="btn btn-primary" type="submit">Search</button>
        </span>
    </form>

    @if (Auth()->user())

        @if (Auth()->user()->role_id === Helper::getManagerRoleId()) {{--Buat Manager--}}
        <div class="content d-flex mt-4">
            <div class="category-content">
                <div class="row d-flex justify-content-center">
                    @foreach($keyboardCategories as $keyboards)
                    <div class="col-4">
                        <div class="card mb-3 pb-4" style="background-color: #baafd1; height: 600px">
                            <a href="{{route('keyboardDetail', ['keyboardId'=>$keyboards->id])}}" style="text-decoration: none; color: black;">
                                <div class="card-body text-center">
                                    <div class="product-image-card d-flex justify-content-center mb-2">
                                        <img src="{{asset($keyboards->imgPath)}}" alt="" class="img-thumbnail img-fluid">
                                    </div>
                                    <div class="product-detail-card">
                                        <strong class="mb-1">{{$keyboards->name}}</strong>
                                        <p class="m-0">$ {{$keyboards->price}}</p>
                                    </div>
                                    <div class="d-flex justify-content-around" style="margin-top: 3em">
                                        <form action="/keyboard/update/{{$keyboards->id}}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-primary">Delete Keyboard</button>
                                        </form>
                                        <a href="/keyboard/update/{{$keyboards->id}}">
                                            <button class="btn btn-primary">Update Keyboard</button>
                                        </a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        @if(Auth()->user()->role_id === Helper::getCustomerRoleId()) {{--Buat Customer--}}
        <div class="content d-flex mt-4">
            <div class="category-content">
                <div class="row d-flex justify-content-center">
                    @foreach($keyboardCategories as $keyboards)
                    <div class="col-4">
                        <div class="card mb-3 pb-4" style="background-color: #baafd1;">
                            <a href="{{route('keyboardDetail', ['keyboardId'=>$keyboards->id])}}" style="text-decoration: none; color: black;">
                                <div class="card-body text-center">
                                    <div class="product-image-card d-flex justify-content-center mb-2">
                                        <img src="{{asset($keyboards->imgPath)}}" alt="" class="img-thumbnail img-fluid">
                                    </div>
                                    <div class="product-detail-card">
                                        <strong class="mb-1">{{$keyboards->name}}</strong>
                                        <p class="m-0">$ {{$keyboards->price}}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    @else

    <div class="content d-flex mt-4">
        <div class="category-content">
            <div class="row d-flex justify-content-center">
                @foreach($keyboardCategories as $keyboards)
                <div class="col-4">
                    <div class="card mb-3 pb-4" style="background-color: #baafd1;">
                        <a href="{{route('keyboardDetail', ['keyboardId'=>$keyboards->id])}}" style="text-decoration: none; color: black;">
                            <div class="card-body text-center">
                                <div class="product-image-card d-flex justify-content-center mb-2">
                                    <img src="{{asset($keyboards->imgPath)}}" alt="" class="img-thumbnail img-fluid">
                                </div>
                                <div class="product-detail-card">
                                    <strong class="mb-1">{{$keyboards->name}}</strong>
                                    <p class="m-0">$ {{$keyboards->price}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
        
    @endif


</div>
@endsection