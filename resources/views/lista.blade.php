@extends('layouts.MyLayout')
@section('content')
<div class="container">
<table class="table">
        <thead>
                <tr>
                  <th scope="col">Nr</th>
                  <th scope="col">Imię</th>
                  <th scope="col">Nazwisko</th>
                  <th scope="col">Kiedy idzie</th>
                </tr>
              </thead>
    @php 
        $i=1;
         @endphp
@foreach($Uzytkownicy as $Uzytkownik)
<tr>
    @php
    
$Idzie =DB::table('ktoidzies')
->select('idzie')
->where('ktoidzies.id','=',"$Uzytkownik->id")
->join('users','ktoidzies.id','=','users.id')
->first();

@endphp
    <td>{{ $i }}</td>
    <td>{{ $Uzytkownik->Imie }}</td>
    <td>{{ $Uzytkownik->Nazwisko}}</td>
    <td>@if($Idzie){{ $Idzie->idzie}} @else Nie ma @endif</td>
</tr>
@php $i++ @endphp
@endforeach
</table>
</div>
{{ $Uzytkownicy->links() }}
@endsection