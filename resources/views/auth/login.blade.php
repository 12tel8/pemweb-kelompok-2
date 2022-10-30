<style>
    .failed-alert {
    max-width: 365px;
    margin: auto;
    }

    .form-container {
    background-color: lightgray;
    border-radius: 8px;
    }

    .form-signin {
    width: 100%;
    max-width: 365px;
    padding: 15px;
    margin: auto;
    }

    .form-signin .checkbox {
    font-weight: 400;
    }

    .form-signin .form-floating:focus-within {
    z-index: 2;
    }

    .form-signin input[type="email"] {
    margin-bottom: -1px;
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    }
</style>

@extends('layouts.main')

@section('container')
     
    @if (session()->has("loginError"))
        <div class="failed-alert">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Alert!</strong> {{ session('loginError') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    @endif

    <div class="form-container position-absolute top-50 start-50 translate-middle mt-2">
        <main class="form-signin fs-5">
            <form action="{{ route('login') }}" method="POST">
            @csrf
            <h1 class="h3 mb-4 fw-bold text-center">Sign in</h1>
        
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" autofocus required value="{{ old('email') }}">
                <label for="floatingInput" class="fs-6">Email address</label>
            </div>
            <div class="form-floating mt-1">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                <label for="floatingPassword" class="fs-6">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            <p class="mt-3 mb-3 text-muted">Don't have an account? <a href="{{ route("register") }}">Register here!</a></p>
            </form>
        </main>
    </div>
@endsection