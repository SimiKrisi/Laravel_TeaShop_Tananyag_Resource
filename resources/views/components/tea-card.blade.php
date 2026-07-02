<div {{$attributes->merge(['class' => 'border rounded-lg p-4 shadow-sm bg-white'])}}>
    @isset($badge)
        <span class="badge">{{ $badge }}</span>
    @endisset
    <h3 class="text-xl font-bold">{{ $tea->nev }}</h3>

    <div>
        {{$slot}}
    </div>

    {{--  --}}
</div>