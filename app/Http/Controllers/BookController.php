<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Book;

class BookController extends Controller {
	function insert(){
    	$book = new Book;
    	$book->room = Input::get('room');
    	$book->time = Input::get('time');
    	$book->checkin = Input::get('date');
    	$book->checkout = Input::get('date');
    	$book->name = Input::get('name');
    	$book->surname = Input::get('surname');
    	$book->phone_number = Input::get('phone_Number');
    	$book->email = Input::get('email');
        $book->address = Input::get('address');
        $book->address2 = Input::get('address2');
        $book->state = Input::get('state');
        $book->city = Input::get('city');
        $book->country = Input::get('country');
        $book->postal_code = Input::get('postal_code');
    	$book->save();
    	return Redirect::to('RgMeetingRoom');
    }
}
