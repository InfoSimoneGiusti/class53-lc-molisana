@extends('layouts.base')

@section('pageTitle', 'Prodotti')

@section('content')


    <section class="products">

        <h1>Lista prodotti</h1>


        <div class="container">
            <h2>Le lunghe</h2>
            <div class="product-list">
                @foreach ($lunghe as $formato)
                    <div class="product">
                        <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                        <h3>{{$formato['titolo']}}</h3>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="container">
            <h2>Le corte</h2>
            <div class="product-list">
                @foreach ($corte as $formato)
                    <div class="product">
                        <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                        <h3>{{$formato['titolo']}}</h3>
                    </div>
                @endforeach
            </div>
        </div>


        <div class="container">
            <h2>Le cortissime</h2>
            <div class="product-list">
                @foreach ($cortissime as $formato)
                    <div class="product">
                        <img src="{{$formato['src']}}" alt="{{$formato['titolo']}}">
                        <h3>{{$formato['titolo']}}</h3>
                    </div>
                @endforeach
            </div>
        </div>

    </section>




@endsection
