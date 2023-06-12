@extends('layouts.auth')
@section('subtitle', 'Registre-se')
@section('content')
    <div class="formLogin">
        <form action="{{ route('auth.signupAction') }}" method="POST">
            @csrf
            <h1>Cadastro</h1>
            <p>Digite os seus dados de acesso no campo abaixo.</p>

            <label for="name">Nome</label>
            <input type="text" placeholder="Digite seu nome" name="name" autofocus="true" />
            @error('name')
                <span class="error">{{ $message }}</span>
            @enderror


            <label for="email">E-mail</label>
            <input type="email" placeholder="Digite seu e-mail" name="email" autofocus="true" />
            @error('email')
                <span class="error">{{ $message }}</span>
            @enderror

            <label for="password">Senha</label>
            <input type="password" placeholder="*********" name="password" />
            @error('password')
                <span class="error">{{ $message }}</span>
            @enderror

            <label for="password">Confirmação de senha</label>
            <input type="password" placeholder="*********" name="password_confirmation" />
            <a href="{{ route('auth.signin') }}">Login</a>
            <input type="submit" value="Criar" class="btn btn-primary" />
        </form>
    </div>
@endsection
