@extends('layouts.master')

@section('title')
Car's list
@endsection


@section('content')
    <ul>
        @foreach ($cars as $car)
        <a href="{{ '/cars/' . $car->id }} "><li>{{ $car->title }}</li></a>
        @endforeach  
    </ul>
@endsection
   
