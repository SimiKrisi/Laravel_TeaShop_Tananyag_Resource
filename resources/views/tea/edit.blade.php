@extends('layouts.Aapp')
@section('title', 'Admin - Update Tea')
@section('content')

    <h1>Update Tea</h1>
    <form action="{{ route('teas.update', $tea->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input class="bg-gray-400 text-black"
             type="text" id="name" name="name" required 
             value="{{ $tea->name }}">
        </div>
        <div>
            <label for="image_path">Image Path:</label>
            <input class="bg-gray-400 text-black" type="text" id="image_path" name="image_path" required 
            value="{{ $tea->image_path }}">
        </div>
        <div>
            <label for="price">Price:</label>
            <input class="bg-gray-400 text-black" type="number" id="price" name="price" step="0.01" required 
            value="{{ $tea->price }}">
        </div>
        <div>
            <label for="specification">Specification:</label>
            <input class="bg-gray-400    text-black" type="text" id="specification" name="specification" required 
            value="{{ $tea->specification }}">
        </div>
        <div>
            <label for="stock">Stock:</label>
            <input class="bg-gray-400 text-black" type="number" id="stock" name="stock" required 
            value="{{ $tea->stock }}">
        </div>
        <div>
            <label for="discount">Discount:</label>
            <input class="bg-gray-400 text-black" type="number" id="discount" name="discount" step="0.01"
             value="{{ $tea->discount }}">
        </div>

        <button type="submit">Update Tea</button>
    </form>
@endsection