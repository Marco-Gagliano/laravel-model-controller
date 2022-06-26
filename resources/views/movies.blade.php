

@extends('layouts.main')

@section('content')

    @foreach ($films as $film)

    <div class="container sc-card my-3">
      <div class="row">
      	<div class="col">
					<p><span>Titolo: </span>{{$film->title}}</p>
					<p class="original-title"><span>Titolo originale: </span>{{$film->original_title}}</p>
					<p class="nationality"><span>Paese di Produzione: </span>  {{$film->nationality}}</span>
					<p class="date"><span>Data di uscita: </span>{{$film->date}}</p>
					<p class="vote"><span>Voto: </span>{{$film->vote}}</p>
          </div>
        </div>
    </div>

    @endforeach

@section('title', 'Movies')
