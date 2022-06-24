

@extends('layouts.main')

@section('content')

    @foreach ($films as $film)

    <div class="container sc-card">
      <div class="row">
      	<div class="col">
					<h1>{{$film->title}}</h1>
					<p class="original-title">{{$film->original_title}}</p>
					<p class="nationality">{{$film->nationality}}</p>
					<p class="date">{{$film->date}}</p>
					<p class="vote">{{$film->vote}}</p>
          </div>
        </div>
    </div>

    @endforeach

@section('title', 'Movies')
