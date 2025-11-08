@extends('layouts.app')

@section('title', 'Regisztráció')

@section('content')
<section class="inner" style="max-width:500px; margin:50px auto;">
    <h2>Regisztráció</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label>Név</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label>Jelszó</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <label>Jelszó megerősítése</label>
            <input type="password" name="password_confirmation" required>
        </div>
        <button type="submit">Regisztrálok</button>
    </form>

    <p>Már van fiókod? <a href="{{ route('login') }}">Jelentkezz be</a></p>
</section>
@endsection
