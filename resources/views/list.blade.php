@extends('templates.base')

@section('pageMain')
    <main>


        <div class="cards_container">
            @foreach ($film as $filmItem)
                <div class="cards">
                   <h4>{{$filmItem -> title}}</h4>
                   <span> <b> titolo originale:</b> {{$filmItem -> original_title}}</span><br>
                   <span> <b>provenienza:</b>  {{$filmItem -> nationality}}</span><br>
                   <span> <b>data di uscita:</b>  {{$filmItem -> date}}</span><br>
                   <span> <b>voto:</b>  {{$filmItem -> vote}}</span><br>

                </div>
            @endforeach
        </div>
    </main>
@endsection
