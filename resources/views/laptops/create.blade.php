<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
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
   </form>
</body>
</html>