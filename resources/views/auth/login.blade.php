@extends('layouts.app')

@section('content')
<div class="login_wrapper">
    <div class="animate form login_form">
      <section class="login_content">
        <form method="POST" action="{{ route('login') }}">
            @csrf
          <h1>Login</h1>
          <div>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror          </div>
          <div>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror          </div>
          <div>

            <button type="submit" class="btn btn-default submit">
                {{ __('Login') }}
            </button>
          </div>
          <div class="clearfix"></div>
          <div class="separator">
            <div>
              <h1>Management System</h1>
            </div>
          </div>
        </form>
      </section>
    </div>
  </div>
@endsection
