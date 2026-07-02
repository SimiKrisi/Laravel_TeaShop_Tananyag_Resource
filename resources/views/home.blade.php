@extends('layouts.app')
@section('title', 'Kezdőlap')
@section('content')


    @foreach($teas as $tea)
        <x-tea-card  :tea="$tea" :isHighlighted="$tea['kulonleges-e']">
            <x-slot name="badge">
                <span class="bg-red-500 text-white p-1">Különleges</span>
            </x-slot>
            <p class="text-green-600">{{$tea->ar_huf}}</p>
            <span class="text-red-500">{{ $getDiscountFormat() }}</span>
        </x-tea-card>
    @endforeach
@endsection

@push('styles')
    <style>
        .bg-warning {
            background-color: #ffc107;
        }
    </style>
@endpush
@push('scripts')
    <script>
       document.addEventListener('DOMContentLoaded', function() {
            const teas = @json($teas);
            console.log(teas);
        });
    </script>
@endpush
@pushOnce('scripts')
    <script>
        console.log('This script will be included only once.');
    </script>
@endpushOnce