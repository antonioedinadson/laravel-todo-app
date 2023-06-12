@extends('layouts.auth')
@section('subtitle', 'Login')
@section('content')
    <div class="formLogin">
        <form action="{{ route('auth.signinAction') }}" method="POST" class="formLogin">
            @csrf
            <h1>Login</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>
            @if ($errors->any())
                <h1>ERROOO</h1>
            @endif
            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" name="email" autofocus="true" />
            <label for="password">Senha</label>
            <input type="password" placeholder="Digite seu e-mail" name="password" />

            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror

            <a href="{{ route('auth.signup') }}">Cadastro</a>
            <input type="submit" value="Acessar" class="btn btn-primary" />
        </form>
    </div>
@endsection
