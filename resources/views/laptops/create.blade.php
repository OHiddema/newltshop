@extends('layout')

@section('content')
<h1>Add a laptop to the shop</h1>
   <form method="POST" action="/laptops">
      {{csrf_field()}}
      <label for="name">Name: </label>
      <input type="text" name="name" id="name" value="{{old('name')}}"><br><br>

      <label for="brand">Brand: </label>
      <input type="text" name="brand" id="brand" value="{{old('brand')}}"><br><br>      

      <label for="price">Price: </label>
      <input type="number" name="price" id="price" value="{{old('price')}}"><br><br>

      <label for="memory">Memory: </label>
      <input type="number" name="memory" id="memory" value="{{old('memory')}}"><br><br>

      <label for="category">Category:</label>
      <select id="category" name="category">
            <option value="B" selected>Budget</option>
            <option value="A">Allround</option>
            <option value="P">Professional</option>
      </select><br><br>

      <label for="blnactive">Active:</label>
      <input type="checkbox" name="blnactive" id="blnactive" value="1" checked><br><br>

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