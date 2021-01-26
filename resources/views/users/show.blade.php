@extends('layouts.plantilla')

@section('title','users Show')

@section('content')
<h1>BIENVENIDO PAGINA users SHOW {{ $user->name }}</h1>
<a href="{{route('users.index')}}">Regresar</a>
@endsection
