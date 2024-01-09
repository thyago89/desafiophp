@extends('layouts.app')

@section('content')

    <div class="container">
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="name">Nome:</label>
                <input type="text" name="name" value="{{ old('name') }}" required minlength="3" maxlength="50">
            </div>

            <div>
                <label for="email">E-mail:</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div>
                <label for="password">Senha:</label>
                <input type="password" name="password" required minlength="6" maxlength="20">
            </div>

            <div>
                <label for="password_confirmation">Confirmação de Senha:</label>
                <input type="password" name="password_confirmation" required>
            </div>

            <button type="submit">Registrar</button>
        </form>
    </div>
@endsection
