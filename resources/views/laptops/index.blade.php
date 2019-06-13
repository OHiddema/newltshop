@extends('layout')

@section('content')
<h1>Laptops</h1>
   <ul>
      @foreach($laptops as $laptop)
      <a href="/laptops/{{$laptop->id}}">
         <li>{{$laptop->name}}</li>
      </a>
      @endforeach
   </ul>
@endsection