<?php namespace App\Http\Controllers;

use App\Comment;
use Input;
use Redirect;

class CommentController extends Controller {
	public function Comment(){
		$comment = new Comment;
		$comment->name = Input::get('name');
		$comment->comment = Input::get('comment');
		$comment->save();
		return Redirect::to('show');
	}
}