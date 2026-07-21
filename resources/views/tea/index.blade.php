@extends('layouts.Aapp')
@section('title', 'Admin - Tea List')
@section('content')
<div>
    <h1>Tea List</h1>
    
    <a href="{{ route('teas.create') }}">Create New Tea</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                
                <th>Price</th>
                
                <th>Stock</th>
                <th>Discount</th>
                <th>Actions</th>
                <th>Show</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teas as $tea)
                <tr>
                    <td>{{ $tea->id }}</td>
                    <td>{{ $tea->name }}</td>
                    
                    <td>{{ $tea->price }}</td>
                    
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
                    <td>
                        <a href="{{ route('teas.show', $tea->id) }}">Show</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection