@extends('layouts.login-master')

@section('content')
<div class="row mt-5 ml-5">
    <div class="col-md-2 offset-md-5">
        <form method="post" action="{{ route('login.perform') }}" class="form-login">

            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <h1 class="h3 mb-3 fw-normal">Halaman Login</h1>

            @include('layouts.partials.messages')

            <div class="form-group form-floating mb-3">
                <input type="text" class="form-control" name="username" value="{{ old('username') }}"
                    placeholder="Username" required="required" autofocus>
                <label for="floatingName">Email atau Username</label>
                @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif
            </div>

            <div class="form-group form-floating mb-3">
                <input type="password" class="form-control" name="password" value="{{ old('password') }}"
                    placeholder="Password" required="required">
                <label for="floatingPassword">Password</label>
                @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group form-floating mb-3">
             <small class="text-muted">Anda belum punya akun? <a href="{{ route('register.perform') }}">Daftar Sekarang</a></small>                
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button>

        </form>
    </div>
</div>
@endsection