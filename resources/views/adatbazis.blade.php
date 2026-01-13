@extends('layouts.app')

@section('content')
<section class="wrapper">
  <div class="inner">
    <h2>Adatbázis adatok</h2>

    <table>
      <tr>
        <th>Mű</th>
        <th>Alkotó</th>
        <th>Típus</th>
      </tr>

      @foreach($kapcsolat as $k)
      <tr>
        <td>{{ $k->mu->cim }}</td>
        <td>{{ $k->alkoto->nev }}</td>
        <td>{{ $k->tipus }}</td>
      </tr>
      @endforeach
    </table>
  </div>
</section>
@endsection
