@extends('welcome')

@section('content')
<form method="post" action="{{ route('users.store') }}">
  @csrf
  <label for="name">Nombre: </label>
  <input type="text" name="name" id="name">
  <input type="submit" value="Enviar">
</form>
@endSection
