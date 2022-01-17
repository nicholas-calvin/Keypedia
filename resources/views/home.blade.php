@extends('navbar')

@section('content')
    <div>
        <h1 class="d-flex justify-content-center">Welcome to Keypedia</h1>
        <h6 class="d-flex justify-content-center">Best Keyboard and Keycaps Shop</h6>
        <br>
        <h3 class="d-flex justify-content-center">Categories</h3>
    </div>
    <div class="d-flex justify-content-around" style="padding: 2em 0 2em 0;" >
        <div style="background-color: #baafd1; width: 400px;">
            <a href="{{route('keyboardDetail')}}" style="text-decoration: none;">
                <div class="d-flex justify-content-center" style="margin: 10px; padding: 20px; align-items: center; border-style: solid; border-color: #afa3c4;">
                    <label for="namaKeyboard">Nama Keyboard</label>
                </div>
                <div class="gambar" style="margin: 10px; margin-top: -20px;">
                    <img src="{{asset('asset/image/1.jpg')}}" alt="Could not load image" srcset="" style="width: 380px;">
                </div>
            </a>
            </div>
    </div>
@auth
<h1>Welcome user!</h1>
@else
@endauth
@endsection