@extends('layout')

@section('content')
<h1>Add a laptop to the shop</h1>
   <form method="POST" action="/laptops">
      {{csrf_field()}}
      <label for="brand">Brand: </label>
      <input type="text" name="brand" id="brand"><br><br>
      
      <label for="name">Name: </label>
      <input type="text" name="name" id="name"><br><br>

      <label for="price">Price: </label>
      <input type="number" name="price" id="price"><br><br>

      <label for="memory">Memory: </label>
      <input type="number" name="memory" id="memory"><br><br>
      
      <button type="submit">Add laptop</button>

      @if ($errors->any())
         <br>
         <div class='bg-danger'>
            <ul>
               @foreach ($errors->all() as $error)
                  <li> {{$error}} </li>
               @endforeach
            </ul>
         </div>
      @endif

   </form>
@endsection