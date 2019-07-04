@extends('layout')

@section('content')
   <h1> {{$laptop->name}} </h1>

   Brand: {{$laptop->brand}} <br>
   Price: {{$laptop->price}} <br>
   Memory: {{$laptop->memory}} <br>
   Active: {{$laptop->blnactive}} <br>
   Caregory: {{$laptop->category}} <br>

   <br>
   <a href="/laptops/{{$laptop->id}}/edit">Edit laptop</a>
@endsection