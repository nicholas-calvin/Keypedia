@extends('navbar')
@section('content')
<div class="container" style="padding: 2em; padding-top: 3em; width: 1200px; height: 830px;">
    <div class="" style="background-color: #b4a8cb;">

        <div style="border-bottom-style: solid; border-bottom-color: #afa3c4;">
            <label style="padding: 1em;">Update Keyboard</label>
        </div>
        
        <div style="background-color: #baaed1; margin-left: 0; margin-right: 0; padding: 2em;" class="d-flex justify-content-around">
            <div class="col-5 d-flex align-items-center">
                <img src="{{asset($keyboard->imgPath)}}" alt="Could not load image" srcset="" style="width: 380px;">
            </div>
            <div class="col-7" style="margin-left: -2em">
                <form action="{{route('updateKeyboard', ['keyboardId' => $keyboard->id])}}" method="post">
                    @csrf
                    <div class="Judul mb-3 d-flex justify-content-evenly">
                        <label for="Category">Category</label>
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
                    <div class="Judul mb-3 d-flex justify-content-evenly">
                        <h6><label for="Keyboard Name">Keyboard Name</label></h6>
                        <input type="text" name="keyboardName" id="keyboardName" placeholder="{{$keyboard->name}}" style="border: none; border-radius: 5px; height: 40px; width: 300px">
                    </div>
                    <div class="Judul mb-3 d-flex justify-content-evenly">
                        <h6><label for="Keyboard Price">Keyboard Price(USD)</label></h6>
                        <input type="text" name="keyboardPrice" id="keyboardPrice" placeholder="{{$keyboard->price}}" style="border: none; border-radius: 5px; height: 40px; width: 300px">
                    </div>
                    <div class="Judul mb-3 d-flex justify-content-evenly">
                        <h6><label for="Keyboard Description">Keyboard Description</label></h6>
                        <textarea name="keyboardDescription" id="keyboardDescription" cols="30" rows="10" style="border: none; border-radius: 5px;"></textarea>
                    </div>
                    <div class="Judul mb-3 d-flex justify-content-evenly">
                        <h6><label for="Keyboard Image">Keyboard Image</label></h6>
                        <input class="form-control rounded-3" type="file" id="formFile" name="keyboardImage" style="border: none; border-radius: 5px; width: 300px">
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