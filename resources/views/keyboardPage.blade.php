@extends('navbar')

@section('content')
<div style="height: 1em;"></div>

<div style="background-color: #b2e3dd; margin: 3em;" class="d-flex justify-content-center">
    <h1>87 Key Keyboard</h1>
</div>
<div style="margin-left: 4em;">
    <form class="d-flex">
        <span>
            <input type="search" placeholder="Search..." style="height: 2em;">
        </span>
        <span style="margin-left: 1em; margin-right: 1em;">
            <select id="disabledSelect" class="form-select" style="height: 2em;">
                <option value="name">Name</option>
                <option value="price">Price</option>
            </select>
        </span>
        <span>
            <button class="" type="submit" style="height: 2em;">Search</button>
        </span>
    </form>
</div>
<div class="d-flex justify-content-around" style="padding: 2em 0 2em 0;" href="{{route('keyboardDetail')}}">
    <div style="background-color: #baafd1; width: 400px;">
        <div class="gambar" style="margin: 10px;">
            <img src="{{asset('asset/image/1.jpg')}}" alt="Could not load image" srcset="" style="width: 380px;">
        </div>
        <div class="d-flex justify-content-center" style="margin: 10px; padding: 10px; align-items: center;">
            <a href="{{route('keyboardPage')}}" style="text-decoration: none;">Nama Keyboard</a>
        </div>
        <div class="d-flex justify-content-center" style="margin: 10px; margin-top: -10px;">
            <label for="price" style="color: white;">Price</label>
        </div>
    </div>
</div>
@endsection