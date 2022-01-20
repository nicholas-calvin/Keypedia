@extends('navbar')
@section('content')
<div class="container" style="padding: 2em; padding-top: 3em; width: 1200px; height: 830px;">
    <div class="" style="background-color: #b4a8cb;">
        
        @if(Auth()->user())    

        @if (Auth()->user()->role_id === Helper::getManagerRoleId()) {{--Buat Admin--}}
            
            <div style="border-bottom-style: solid; border-bottom-color: #afa3c4;">
                <label style="padding: 1em;">Detail Keyboard</label>
            </div>
            
            @foreach ($keyboardDetail as $keyboard)
            <div style="background-color: #baaed1; margin-left: 0; margin-right: 0; padding: 2em;" class="d-flex justify-content-around">
                <div class="col-5 d-flex align-items-center">
                    <img src="{{asset($keyboard->imgPath)}}" alt="Could not load image" srcset="" style="width: 380px;">
                </div>
                <div class="col-6" style="margin-left: 2em;">
                    <div class="Judul mb-3">
                        <h2>{{$keyboard->name}}</h2>
                    </div>
                    <div class="price mb-2">
                        $ {{$keyboard->price}}
                    </div>
                    <div class="desc mb-2">
                        {{$keyboard->description}}
                    </div>
                </div>
            </div>
            @endforeach
        @endif
        
        @if (Auth()->user()->role_id === Helper::getCustomerRoleId()) {{--Buat Admin--}}
            
        <div style="border-bottom-style: solid; border-bottom-color: #afa3c4;">
            <label style="padding: 1em;">Detail Keyboard</label>
        </div>
        @foreach ($keyboardDetail as $keyboard)
        <div style="background-color: #baaed1;" class="d-flex justify-content-around">
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('error')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div style="background-color: #baaed1; margin-left: 0; margin-right: 0; padding: 2em;" class="d-flex justify-content-around">
            <div class="col-5 d-flex align-items-center">
                <img src="{{asset($keyboard->imgPath)}}" alt="Could not load image" srcset="" style="width: 380px;">
            </div>
            <div class="col-6" style="margin-left: 2em;">
                <div class="Judul mb-3">
                    <h2>{{$keyboard->name}}</h2>
                </div>
                <div class="price mb-2">
                    $ {{$keyboard->price}}
                </div>
                <div class="desc mb-2">
                    {{$keyboard->description}}
                </div>
                <div>
                    <form action="{{route('addToCart', ['keyboardId'=>$keyboard->id])}}" method="post">
                        @csrf
                        <label for="Quantity" style="margin-right: 2em; margin-left: 105px">Quantity : </label>
                        <input type="number" name="quantity" id="quantity" style="border: none; border-radius: 5px; height: 40px;">
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-primary" style="margin-top: 1em">Add to cart</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        @endif

        @else
        <div style="border-bottom-style: solid; border-bottom-color: #afa3c4;">
            <label style="padding: 1em;">Detail Keyboard</label>
        </div>
        @foreach ($keyboardDetail as $keyboard)
        <div style="background-color: #baaed1;" class="d-flex justify-content-around">
            @if(session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{session('error')}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
        </div>
        <div style="background-color: #baaed1; margin-left: 0; margin-right: 0; padding: 2em;" class="d-flex justify-content-around">
            <div class="col-5 d-flex align-items-center">
                <img src="{{asset($keyboard->imgPath)}}" alt="Could not load image" srcset="" style="width: 380px;">
            </div>
            <div class="col-6" style="margin-left: 2em;">
                <div class="Judul mb-3">
                    <h2>{{$keyboard->name}}</h2>
                </div>
                <div class="price mb-2">
                    $ {{$keyboard->price}}
                </div>
                <div class="desc mb-2">
                    {{$keyboard->description}}
                </div>
                <div>
                    <form action="{{route('addToCart', ['keyboardId'=>$keyboard->id])}}" method="post">
                        @csrf
                        <label for="Quantity" style="margin-right: 2em; margin-left: 105px">Quantity : </label>
                        <input type="number" name="quantity" id="quantity" style="border: none; border-radius: 5px; height: 40px;">
                    <div class="d-flex justify-content-center align-items-center">
                        <button class="btn btn-primary" style="margin-top: 1em">Add to cart</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection