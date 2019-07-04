@extends('layout')

@section('content')
   <h1>Edit laptop</h1>
   <form method="POST" action="/laptops/{{$laptop->id}}">
      @method('PATCH')
      @csrf
      <label for="brand">Brand: </label>
      <input type="text" name="brand" id="brand" value="{{$laptop->brand}}" ><br><br>
      
      <label for="name">Name: </label>
      <input type="text" name="name" id="name" value="{{$laptop->name}}"><br><br>

      <label for="price">Price: </label>
      <input type="number" name="price" id="price" value="{{$laptop->price}}"><br><br>

      <label for="memory">Memory: </label>
      <input type="number" name="memory" id="memory" value="{{$laptop->memory}}"><br><br>

      <?php
      $checked = ($laptop->blnactive == 1) ? 'checked' : '';
      ?>

      <label for="blnactive">Active:</label>
      <input type="checkbox" id="blnactive" name="blnactive" value="1" <?= $checked ?>><br><br>

      <?php
      $b = ($laptop->category == 'B') ? 'selected' : '';
      $a = ($laptop->category == 'A') ? 'selected' : '';
      $p = ($laptop->category == 'P') ? 'selected' : '';
      ?>
      
      <label for="category">Category:</label>
      <select id="category" name="category">
         <option value="B" <?=$b?>>Budget</option>
         <option value="A" <?=$a?>>Allround</option>
         <option value="P" <?=$p?>>Professional</option>
      </select>
      <br><br>
      
      <button type="submit">Update laptop</button>
   </form>

   <br>
   <form method="POST" action="/laptops/{{$laptop->id}}">
      @method('DELETE')
      @csrf
      <button type="submit">Delete laptop</button>
   </form>

@endsection