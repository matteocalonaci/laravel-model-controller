@extends('layouts.app')

@section('content')
<h1 class="text-info">Il nostro staff</h1>
@foreach($staff as $personale)
<li class="p-1">{{$personale->Nome}}  {{$personale->Cognome}}</li>
@endforeach

@endsection
