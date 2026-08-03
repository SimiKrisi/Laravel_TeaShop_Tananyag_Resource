@extends('layouts.Aapp')
@section('title', 'Admin - Update Tea')
@section('content')

    <h1>Update Tea</h1>
    {{-- @if($errors->any())
        <div style="color: red; border: 1px solid red; padding: 10px; margin-bottom: 20px;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}
    <form action="{{ route('teas.update', $tea->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input class="bg-gray-400 text-black"
             type="text" id="name" name="name"  
             value="{{$tea->name}}">
             @error('name')
                <div style="color: red; font-size: 12px;">{{$message}}</div>
             @enderror
        </div>
        <div>
            <label for="image_path">Image Path:</label>
            <input class="bg-gray-400 text-black" type="text" id="image_path" name="image_path"  
            value="{{ $tea->image_path }}">
            @error('image_path')
                <div style="color: red; font-size: 12px;">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="price">Price:</label>
            <input class="bg-gray-400 text-black" type="number" id="price" name="price" step="0.01"  
            value="{{ $tea->price }}">
            @error('price')
                <div style="color: red; font-size: 12px;">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="specification">Specification:</label>
            <input class="bg-gray-400    text-black" type="text" id="specification" name="specification"  
            value="{{ $tea->specification }}">
            @error('specification')
                <div style="color: red; font-size: 12px;">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="stock">Stock:</label>
            <input class="bg-gray-400 text-black" type="number" id="stock" name="stock"  
            value="{{ $tea->stock }}">
            @error('stock')
                <div style="color: red; font-size: 12px;">{{$message}}</div>
            @enderror
        </div>
        <div>
            <label for="discount">Discount:</label>
            <input class="bg-gray-400 text-black" type="number" id="discount" name="discount" step="0.01"
             value="{{$tea->discount}}">
             @error('discount')
                <div style="color: red; font-size: 12px;">{{$message}}</div>
            @enderror
        </div>

        <button type="submit">Update Tea</button>
    </form>
@endsection