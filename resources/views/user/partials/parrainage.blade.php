@extends('user/home')

@section('container')

<div class="right_col" role="main">
	<br><br>
<div class="alert alert-success" role="alert">
    <h2 class="text-center">Our differents filleuls</h2>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Nom</th>
      <th scope="col">Prenoms</th>
      <th scope="col">Pays</th>
      <th scope="col">Photo</th>
      <th scope="col">Created_at</th>
    </tr>
  </thead>
  <tbody>
  	@foreach ($filleuls as $filleul)
    <tr>
     
      <td>{{$filleul->name}}</td>
      <td>{{$filleul->lastname}}</td>
      <td>{{$filleul->country}}</td>
      <td><img height="80" width="80" src="{{ asset("storage/$filleul->identity") }}"></td>
      <td>{{$filleul->created_at}}</td>
    </tr>
  	@endforeach
  </tbody>
</table>
</div>

@stop