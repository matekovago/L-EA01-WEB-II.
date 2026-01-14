@extends('layouts.app')

@section('title', 'Üzenetek')

@section('content')
<section class="inner" style="max-width:1000px; margin:80px auto;">
    <h2>Üzenetek</h2>

    @if($messages->isEmpty())
        <p>Még nincs üzenet.</p>
    @else
        <div style="overflow-x:auto;">
            <table style="width:100%; border-collapse:collapse;">
                <thead>
                    <tr>
                        <th style="border-bottom:1px solid #ccc; padding:8px;">Küldés ideje</th>
                        <th style="border-bottom:1px solid #ccc; padding:8px;">Név</th>
                        <th style="border-bottom:1px solid #ccc; padding:8px;">Email</th>
                        <th style="border-bottom:1px solid #ccc; padding:8px;">Üzenet</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($messages as $m)
                        <tr>
                            <td style="border-bottom:1px solid #eee; padding:8px; white-space:nowrap;">
                                {{ $m->created_at->format('Y.m.d H:i') }}
                            </td>
                            <td style="border-bottom:1px solid #eee; padding:8px;">
                                {{ $m->name }}
                            </td>
                            <td style="border-bottom:1px solid #eee; padding:8px;">
                                {{ $m->email }}
                            </td>
                            <td style="border-bottom:1px solid #eee; padding:8px;">
                                {{ $m->message }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
</section>
@endsection
