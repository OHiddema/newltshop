@extends('layout')

@section('content')
   <h1>Edit laptop</h1>
   <form method="POST" action="/laptops/{{$laptop->id}}">
      {{method_field('PATCH')}}
      {{csrf_field()}}
      <label for="brand">Brand: </label>
      <input type="text" name="brand" id="brand" value="{{$laptop->brand}}" ><br><br>
      
      <label for="name">Name: </label>
      <input type="text" name="name" id="name" value="{{$laptop->name}}"><br><br>

      <label for="price">Price: </label>
      <input type="number" name="price" id="price" value="{{$laptop->price}}"><br><br>

      <label for="memory">Memory: </label>
      <input type="number" name="memory" id="memory" value="{{$laptop->memory}}"><br><br>
      
      <button type="submit">Update laptop</button>
   </form>

@endsection