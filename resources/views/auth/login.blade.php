@extends('layouts.app')

@section('title', 'Bejelentkezés')

@section('content')
<section class="inner" style="max-width:500px; margin:70px auto;">
    <h2>Bejelentkezés</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
        </div>
        <div>
            <label>Jelszó</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit" style="margin-top: 20px">Bejelentkezés</button>
    </form>

    <p>Nincs még fiókod? <a href="{{ route('register') }}">Regisztrálj itt</a></p>
</section>
@endsection
