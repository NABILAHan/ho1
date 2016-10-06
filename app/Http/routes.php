    <?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('dashboard', function(){
    return view('templates/dashboard');
});

Route::get('meeting', function(){
    return view('templates/meetingRoom');
});
Route::get('home', function(){
    return view('templates/abbb');
});
Route::get('room', function(){
    return view('templates/reservationRoom');
});
Route::get('food', function(){
    return view('templates/food');
});
Route::get('contact', function(){
    return view('templates/comman');
});

// Route::get('Rv', function(){
//     return view('templates/Rv');
// });


Route::post('addComment','CommentController@Comment');

Route::get('show',function(){
    $cmt = Comment::orderBy('updated_at','DESC')->get();
    return  view('templates/show')
    ->with('comments',$cmt);
});
// Route::get('Rv1', function(){
//     return view('templates/Rv1');
// });
Route::get('Buffet', function(){
    return view('templates/Buffet');
});
Route::get('MeetingRoom1', function(){
    return view('templates/MeetingRoom1');
});
Route::get('MeetingRoom2', function(){
    return view('templates/MeetingRoom2');
});
Route::get('RgMeetingRoom', function(){
    return view('templates/RgMeetingRoom');
});     


 // Route::get('templates/RgMeetingRoom','BookController@insert');

 Route::post('/', 'BookController@insert');

Route::group(['middleware' => ['web']], function () {
    //Route::get('/', 'VolumeController@index');

     // Route::post('/', 'BookController@insert');
      // Route::get('templates/RgMeetingRoom','BookController@insert');
});

