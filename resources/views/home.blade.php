<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <title>Laravel</title>
    </head>
    <body>
        <div>
        <h1>crud</h1>
        <a href="/add-Post-Form"><button>add</button></a>
        </div>
        <table>
        <tr>
            <th>title</th>
            <th>description</th>
            <th>delete</th>
            <th>edit</th>
        </tr>
        @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td class="delete"><a href="{{route('post.delete',['id'=> $post->id])}}"><button><img src="img/delete.svg" alt=""></button></a></td>
            <td class="edit"><a href="{{route('form.updatePost',['id' => $post->id])}}"><button><img src="img/pencil.svg" alt=""></button></a></td>
        </tr>
        @endforeach
        </table>          
    </body>
</html>
