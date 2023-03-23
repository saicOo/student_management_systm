<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    @include('layouts.head')
</head>

<body style="background: #F7F7F7">
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>Login</h1>
                    <div>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div>

                        <button type="submit" class="btn btn-default submit">
                            {{ __('Login') }}
                        </button>
                    </div>
                    <div class="clearfix"></div>
                    <div class="separator">
                        <div>
                            <h1>Management System</h1>
                            <table class="table table-bordered">
                                <thead>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Role</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>admin@app.com</td>
                                        <td>1234</td>
                                        <td>Suber Admin</td>
                                    </tr>
                                    <tr>
                                        <td>subAdmin@app.com</td>
                                        <td>1234</td>
                                        <td>Sub Admin</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</body>

</html>
