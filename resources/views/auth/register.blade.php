<style>
    .form-container {
    background-color: lightgray;
    border-radius: 8px;
    width: 385px;
    margin: auto;
    }

    .form-signin {
    width: 100%;
    max-width: 375px;
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

    <div class="form-container position-absolute top-50 start-50 translate-middle">
        <main class="form-signin fs-5">
            <form action="{{ route('register') }}" method="POST">
            @csrf
            <h1 class="h3 mb-4 fw-bold text-center">Register</h1>
        
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name">
                <label for="floatingInput" class="fs-6">Username</label>
            </div>
            <div class="form-floating mt-1">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
                <label for="floatingInput" class="fs-6">Email address</label>
            </div>
            <div class="form-floating mt-1">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password">
                <label for="floatingPassword" class="fs-6">Password</label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
            </form>
        </main>
    </div>
@endsection