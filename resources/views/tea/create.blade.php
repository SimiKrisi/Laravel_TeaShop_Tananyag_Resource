@extends('layouts.Aapp')
@section('title', 'Admin - Create Tea')
@section('content')

    <h1>Create New Tea</h1>
    <form action="{{ route('teas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input class="bg-gray-400 text-black"
             type="text" id="name" name="name" required value="{{old('name')}}">
            @error('name')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="image_path">Image Path:</label>
            <input class="bg-gray-400 text-black" type="file" id="image_path" name="image_path" required >
            @error('image_path')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="price">Price:</label>
            <input class="bg-gray-400 text-black" type="decimal" id="price" name="price" step="0.01" required value="{{old('price')}}"> 
            @error('price')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="specification">Specification:</label>
            <input class="bg-gray-400    text-black" type="text" id="specification" name="specification" required value="{{old('specification')}}">
            @error('specification')
                <div class="text-red-500">{{ $message }}</div>
            @enderror        
        </div>
        <div>
            <label for="stock">Stock:</label>
            <input class="bg-gray-400 text-black" type="number" id="stock" name="stock" required value="{{old('stock')}}">
            @error('stock')
                <div class="text-red-500">{{ $message }}</div>
            @enderror           
        </div>
        <div>
            <label for="discount">Discount:</label>
            <input class="bg-gray-400 text-black" type="decimal" id="discount" name="discount" step="0.01" value="{{old('discount')}}">
            @error('discount')
                <div class="text-red-500">{{ $message }}</div>
            @enderror  
        </div>

        <button type="submit">Create Tea</button>
    </form>
@endsection