<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
   <div>
   <h1>add post form</h1>

<form action="{{route('post.add')}}">
@csrf
<label for="title">title</label>
    <input type="text" name="title" id="">
    <label for="description">description</label>
    <input type="text" name="description" id="">
<button type="submit">submit</button>
</form>
   </div>
</body>
</html>