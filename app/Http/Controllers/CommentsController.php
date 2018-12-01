<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;

class CommentsController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }
    
    public function showComments($recipe)
    {
            $comments = Comments::where('recipe', $recipe)->get();
            return $comments;
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $recipe)
    {
        $this->validate($request, ['comment' => 'required']);
        
        $comment = new Comments;
        $comment->uid = auth()->user()->name;
        $comment->message = $request->input('comment');
        $comment->recipe = $recipe;
        $comment->save();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comment = Comments::find($id);
        $comment->delete();
        return redirect()->back();
    }
}
