@extends('welcome')

@section('content')
<table>
  <thead>
    <tr>
      <td>Id</td>
      <td>Name</td>
      <td>Phone</td>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
      <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        @if($user->profile)
        <td>{{ $user->profile->phone }}</td>
        @else
        <td> - </td>
        @endIf
      </tr>
    @endForeach
  </tbody>
</table>
@endSection
