@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Trains: {{count($trains)}}</h1>
    <ul>
        @foreach ($trains as $train)
            <li>Agency name: {{$train -> agency}}
                Departure date: {{$train -> departure_date}}
            </li>
        @endforeach
    </ul>
@endsection
