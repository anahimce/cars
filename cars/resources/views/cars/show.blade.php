@extends('layouts.master')

@section('title')
{{ $car->title }}
@endsection


@section('content')
    <div>
        <h1>{{ $car->producer }}</h1>
        <h2>{{ $car->title }}</h2>    
    </div>
@endsection