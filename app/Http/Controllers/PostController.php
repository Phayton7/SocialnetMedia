<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function postCreatePost(Request $request)
    {
      //Validation
      $this->validate($request, [
        'body'=> 'required | max:1000'
      ]);

      $post = new Post();
      $post ->body = $request['body'];
      //Save the post as relatedto the authenticated user
      $message = 'There was an error';
      if($request->user()->posts()->save($post))
      {
        $message='Post successfully created!';
      }
      return redirect()->route('dashboard')->with(['message'=>$message]);

    }
}

?>
