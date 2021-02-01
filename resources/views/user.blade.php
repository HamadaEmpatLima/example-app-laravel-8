@extends('layouts.app')

@section('title', 'User Dahboard')

@section('content')
    <div class="container">
        <h1>Welcome {{ $user->name }}</h1>
    </div>
@endsection