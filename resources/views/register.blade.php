@extends('layouts.app')

@section('title', 'Regsiter')

@section('content')
<div class="container mt-5">
    <div class="col-md-12">
        <form method="POST" action="{{ route('register.store') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name">
                @error('name')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" name="email">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                @error('email')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                @error('password')
                <span class="invalid-feedback">
                    {{ $message }}
                </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</div>
@endsection
