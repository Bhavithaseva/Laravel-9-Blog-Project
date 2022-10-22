<?php

namespace App\Http\Controllers\Frontend;
use  Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
use  Illuminate\Support\Facades\Validator;

use Laravel\Ui\Presets\React;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        if(Auth::check())
        {
            $validator=Validator::make($request->all(),[
              'comment_body'=>'required|string'
            ]);
            if($validator->fails()){
                return redirect()->back()->with('message', 'Comment area is mandetor');
            }
            $post=Post::where('slug',$request->post_slug)->where('status','0')->first();
            if($post)
            {
                Comment::create([
                    'post_id'=>$post->id,
                    'user_id'=>Auth::user()->id,
                    'comment_body'=>$request->comment_body,
                ]);
                return  redirect()->back()->with('message', 'Commited Successfully');

            }else{
                return  redirect()->back()->with('message', 'No Such Post Found');
            }
  
        }
        else{
            return redirect('login')->with('message', 'Login first to comment');
        }
    }
}