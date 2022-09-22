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
    <h1>update Post Form</h1>
    <form action="{{route('post.update',['id'=> $id])}}">
    @csrf
    <label for="title"></label>
    <input type="text" name="title" id="" value={{$title}} require>
    <label for="description">description</label>    
    <input type="text" name="description" id="" value={{$description}} require>
        <button type="submit">submit</button>
    </form>
    </div>
</body>
</html>