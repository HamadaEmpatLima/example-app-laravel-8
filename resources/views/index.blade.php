@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
{{-- PHP --}}
@php
    // $nama = 'Hamada';
    // $nim = '162410101136';
    // $universitas = 'Universitas Jember';

    $students = ['Hamada', 'Navis', 'Nobella'];

    $names = ["Hamada", "Nobella", "Navis"];
    $schools = ["UNEJ", "UNEJ", "IPB"];

@endphp

{{-- HTML --}}
{{-- <h5>Nama: {{ $nama }}</h5>
<h5>NIM: {{ $nim }}</h5>
<h5>Universitas: {{ $universitas }}</h5> --}}

<hr>

{{-- <h4>Daftar Siswa SMA Al-Iftitahiyah</h4>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
    </tr>
  </thead>
  <tbody>
    @for ($i = 0; $i < count($students); $i++)
        <tr>
            <td>{{ ($i+1) }}</td>
            <td>{{ $students[$i] }}</td>
        </tr>
    @endfor
  </tbody>
</table> --}}

<hr>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Univesitas</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 0; $i < count($names); $i++)
            {{-- @if ($schools[$i] == "IPB") --}}
            @if ($names[$i] == "Hamada")                
            <tr>
                <td>{{ ($i+1) }}</td>
                <td>{{ $names[$i] }}</td>
                <td>{{ $schools[$i] }}</td>
            </tr>
            @endif      
        @endfor
    </tbody>
</table>


@endsection