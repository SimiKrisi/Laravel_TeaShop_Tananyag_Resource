<div class="container mt-5">
    <h3>{{ $tea['nev'] }}</h3>
    @if($tea['kulonleges-e'])
        <p class="{{$tea['kulonleges-e']? 'bg-warning text-dark':''}}">Különleges tea</p>
    @else
        
        <p>Általános</p>
    @endif
    <p>Ár: {{ $tea['ar_huf'] }} HUF</p>
    <p>Leírás: {{ $tea['leiras'] }}</p>
    
</div>