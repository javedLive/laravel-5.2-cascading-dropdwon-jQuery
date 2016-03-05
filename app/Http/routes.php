<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});


|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

// Chat rooms

/*Route::get('/api/chat-rooms',array('user' => 'ChatRoomController@getAll'));
Route::post('/api/chat-room',array('user' => 'ChatRoomController@create'));

// Message Api

Route::get('/api/messages/[chatRoom]',array('uses' => 'MessageController@getByChatRoom'));
Route::get('/api/messages/[chatRoom]',array('uses' => 'MessageController@createInChatRoom'));

Route::get()
Route::group(['middleware' => ['web']], function () {
    //
}); */


Route::get('/', function () {
	 $categories=\App\Category::all();
    return view('index')->with ('categories',$categories);

});

Route::get('ajax',function(Request $requ){
	$cat_id = $requ::input(['cat_id']);
	$subcategories=\App\Subcategory::where('category_id','=',$cat_id)->get();
	return Response::json($subcategories);
	
});
//Route::get('updatedUserProfile','RegistrationController@getUpdatedUserProfile');

// Route::controller('registration','RegistrationController');
