@extends('layouts.app')

@section('title', 'Kapcsolat')

@section('content')
<section class="inner" style="max-width:600px; margin:80px auto;">

    <h2>Kapcsolat</h2>
    <p>Kérjük, töltse ki az alábbi űrlapot és hamarosan felvesszük önnel a kapcsolatot.</p>

    {{-- visszajelzés --}}
    @if(session('success'))
        <div style="background:#d4edda; border:1px solid #c3e6cb; color:#155724; padding:10px; margin-bottom:20px;">
            {{ session('success') }}
        </div>
    @endif

    <form method="POST" action="{{ route('kapcsolat.send') }}">
        @csrf

        <div style="margin-bottom:15px;">
            <label>Név:</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
            @error('name')
                <p style="color:red; margin:0;">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom:15px;">
            <label>Email-cím:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
            @error('email')
                <p style="color:red; margin:0;">{{ $message }}</p>
            @enderror
        </div>

        <div style="margin-bottom:15px;">
            <label>Üzenet:</label>
            <textarea name="message" rows="5" required>{{ old('message') }}</textarea>
            @error('message')
                <p style="color:red; margin:0;">{{ $message }}</p>
            @enderror
        </div>

        <button type="submit" style="margin-top:15px;">
            Üzenet küldése
        </button>
    </form>

</section>
@endsection
