@extends('layouts.login')

@section('content')
    <h1 class="title-login">Área de Login</h1>

    {{-- Alertas --}}
    @if(session('error'))
        <div class="alert-login alert-login-error">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert-login alert-login-success">
            {{ session('success') }}
        </div>
    @endif

    <form class="mt-4" action="{{ route('login.process') }}" method="POST">
        @csrf

        <div class="form-group-login">
            <label for="email" class="form-label-login">E-mail:</label>
            <input type="email" name="email" id="email" placeholder="Digite seu e-mail" class="form-input-login">
        </div>

        <div class="form-group-login">
            <label for="password" class="form-label-login">Senha:</label>
            <input type="password" name="password" id="password" placeholder="Digite sua senha" class="form-input-login">
        </div>

        <div class="btn-group-login">
            <button type="submit" class="btn-submit">Entrar</button>
        </div>
    </form>
@endsection

