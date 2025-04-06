@extends('layouts.auth')

@section("style")
    <style>
        html, body {
            height: 100%;
        }
        .form-signin {
            max-width: 330px;
            padding: 1rem;
        }
        .form-signin .form-floating:focus-within{
            z-index: 2;
        }
        .form-signin input[type = password]{
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

    </style>
@endsection

@section("content")
    <main class="form-signin w-100 m-auto">
        <form action="{{route('login.post')}}" method="post">
            @csrf
            <img src="{{asset('assets/images/logo.svg')}}" alt="logo" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please Sign In</h1>

            <div class="form-floating">
                <input name="email" type="email" class="form-control" id="floatingInput" placeholder="exemple@gmail.com">
                <label for="floatingInput">Email Address</label>
                @error('email')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-floating" style="margin-bottom: 10px">
                <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="password123">
                <label for="floatingPassword">Password</label>
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-check text-start my-3">
                <input name="password" type="checkbox" class="form-check-input" id="flexcheckDefault" value="remember-me">
                <label class="form-check-label" for="flexcheckDefault">Remember Me</label>
            </div>

            @if(session() ->has("success"))
                <div class="alert alert-success">
                    {{session()->get("success")}}
                </div>
            @endif

            @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <button class="btn btn-primary w-100 py-2" type="submit"> Sign In </button>

            <a href="{{ route("register") }}" class="text-center"> Create a new account </a>
            <p class="text-body-secondary mt-5 mb-3"> &copy; 2024-2025</p>

        </form>
    </main>
@endsection

