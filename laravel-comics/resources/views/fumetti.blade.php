@extends('layout.app')

@section('page-title', 'Pagina dei Fumetti')

@section ('content')
<section class="contents">
        <div class="container">
            @foreach ($testi as $testo)
                <div class="product-card">
                    <img src="{{$testo['thumb']}}">
                    <h3>{{$testo['title']}}</h3>
                </div>
            @endforeach
        </div>
    </section>
@endsection