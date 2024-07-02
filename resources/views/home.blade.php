@extends('layouts.app')

@section('content')
<h1 class="text-info">Ospiti</h1>
@foreach($guests as $guest)
<li class="p-1">Nome ospite: {{$guest->Nome}}  {{$guest->Cognome}}</li>
@endforeach

@endsection
