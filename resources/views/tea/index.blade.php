@extends('layouts.Aapp')
@section('title', 'Admin - Tea List')
@section('content')
<div>
    <h1>Tea List</h1>
    <form action="{{route('teas.index')}}" method="GET" class="mb-6 flex gap-4">
        <input type="text" name="search" value="{{request('search')}}" placeholder="Keresés név alapján..." class="border px-4 py-2 text-white rounded">
        
        <label class="flex items-center gap-2">
            <input type="checkbox" name="on_sale" value="1" {{ request('on_sale') ? 'checked' : '' }}>
            Csak akciósok
        </label>
        <label class="flex items-center gap-2">
            <input type="checkbox" name="in_stock" value="1" {{ request('in_stock') ? 'checked' : '' }}>
            Készleten
        </label>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Keresés</button>
    </form>
    <a href="{{route('teas.create')}}">Create New Tea</a>
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
                    <td><img src="{{ asset('storage/'.$tea->image_path) }}" alt="{{$tea->image_path}}" width="100"></td>
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
        <div class="mt-8">
            {{ $teas->withQueryString()->links() }}
        </div>
    </table>
</div>

@endsection