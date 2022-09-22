<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // protected $fillable = ['title','description'];
    public function addNewPostForm()
    {
        return view('addPostForm');
    }
    public function addNewPost(Request $request )
    {
        
        $post = new Posts();
        $post->title = $request->title;
        $post->description = $request->description;
        
        $title = $post->title;
        $description=$post->description;


        if($title!='' || $description!='' ) {
            $post->save();
            return redirect('/');
        }
        else{
           return redirect('/add-Post-Form');
        }
    }
    public function updatePostForm($id)
    {
        $post = Posts::find($id);
        $title = $post->title;
        $description = $post->description;
        $post = $post->id;
        return view('updatePostForm',['title'=>$title, 'description' =>$description,'id'=>$id]);
    }


    public function updatePost($id,Request $request)
    {
        $post = Posts::find($id);
        $post->title = $request -> title;
        $post->description = $request -> description;
        $post->save();
       return redirect('/');
    }
    public function deletePost($id)
    {
        Posts::destroy($id);
        return redirect('/');

    }
}
