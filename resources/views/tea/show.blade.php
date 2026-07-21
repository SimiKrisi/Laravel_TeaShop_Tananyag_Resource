@extends('layouts.Aapp')
@section('title', 'Admin - Tea Details')
@section('content')
<div>
    <h1>Tea Details</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Image URL</th>
                <th>Price</th>
                <th>Specification</th>
                <th>Stock</th>
                <th>Discount</th>
                <th>Actions</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $tea->id }}</td>
                <td>{{ $tea->name }}</td>
                <td>{{ $tea->image_path }}</td>
                <td>{{ $tea->price }}</td>
                <td>{{ $tea->specification }}</td>
                <td>{{ $tea->stock }}</td>
                <td>{{ $tea->discount }}</td>
                <td>
                    <a href="{{ route('teas.edit', $tea->id) }}">Edit</a>
                    <form action="{{ route('teas.destroy', $tea->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
                
            </tr>
        </tbody>
    </table>
</div>

@endsection