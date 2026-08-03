@extends('layouts.Aapp')
@section('title', 'Admin - Create Tea')
@section('content')

    <h1>Create New Tea</h1>
    <form action="{{ route('teas.store') }}" method="POST">
        @csrf
        <div>
            <label for="name">Name:</label>
            <input class="bg-gray-400 text-black"
             type="text" id="name" name="name" required>
        </div>
        <div>
            <label for="image_path">Image Path:</label>
            <input class="bg-gray-400 text-black" type="text" id="image_path" name="image_path" required>
        </div>
        <div>
            <label for="price">Price:</label>
            <input class="bg-gray-400 text-black" type="decimal" id="price" name="price" step="0.01" required>
            @error('price')
                <div class="text-red-500">{{ $message }}</div>
            @enderror
        </div>
        <div>
            <label for="specification">Specification:</label>
            <input class="bg-gray-400    text-black" type="text" id="specification" name="specification" required>
        </div>
        <div>
            <label for="stock">Stock:</label>
            <input class="bg-gray-400 text-black" type="number" id="stock" name="stock" required>
        </div>
        <div>
            <label for="discount">Discount:</label>
            <input class="bg-gray-400 text-black" type="decimal" id="discount" name="discount" step="0.01">
        </div>

        <button type="submit">Create Tea</button>
    </form>
@endsection