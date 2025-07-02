<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Post;


Route::get('/', function () {
    return view('welcome');
});


// Route::get('/admin/posts/dkfdkf/dkfjdkf',array('as'=> 'admin.post', function () {

//   $url = route('admin.post');


//     return "this is our url" .$url ;
// }));





// Route::get('/about/index', function () {
//     $url = route('about.index');


//     return "this is our url" .$url ;
// })->name('about.index');




// Route::get('/about', function () {
//     return "this is our aboute page ";
// });
// Route::get('/footer', function () {
//     return "this is our footer page ";
// });

// Route::get('post/{id}/{name}', function($id,$name){
//  return "the number is :" .$id . " " .$name;

// });


// Route::resource('posts' , PostsController::class);
Route::resource('posts' , PostsController::class);
 
Route::get('contact/{id}/{name}',[PostsController::class, 'view_coctant']);

Route::get('post', [PostsController::class , 'index']);
Route::get('advance', [PostsController::class , 'advance']);
// Route::get('posts/show/{id}/{name}' , [PostsController::class ,'show']);


// Route::get('post/show' , 'PostsController@show');

Route::get('/insert' , function(){
DB::insert('insert into posts(name , description)  values(? , ?)',['post name' ,'post description']);
 
DB::table('posts')->insert([

    'name' => "this is post name seccond name",
     'description' => "this is post seccond  description",
]);

return 'post has been successfully inserted';
});

// Route::get('read', function(){
 
//   $query = DB::select('select * from posts where id = 5 ' );
//           foreach ($query as $post){

//              return $post->name;
//           }
// });

// Route::get('update', function(){
 
//     $updated = DB::update('update posts set name ="update name" where id = 4');

// return "post has been suceesfully updated".$updated;

// });
// Route::get('delete', function(){
 
//     $deleted = DB::delete('delete from posts where id = 4');

// return "post has been suceesfully deleted".$deleted;

// });

 

//  Route::get('/read', function(){

//     $posts = Post::all();

//   foreach($posts as $post){
//     return $post;
//   }
//  });
// Route::get('basicupdate',function(){

//   $posts = new Post;

//  $posts->name="Laravel cousrse by sahel";
//  $posts->description = "we love our instrutor";
//  $posts->save();

// });

// Route::get('basicupdate',function(){

//     $posts = Post::find(6);
  
//    $posts->name="Laravel cousrse by sahel updated";
//    $posts->description = "we love our instrutor \'updated";
//    $posts->save();
  
//   });

//  Route::get('create',function(){
 
//      Post::create(['name'=>'the create mothod' , 'description' => 'Wow I \'am learning laravel with sahel ']);

//  });

// Route::get('update',function($id){
 
// $id = find($id);
//     Post::where('id', $id)->orWhere('in_admin',0)->update(['name'=>'the create mothod update form' , 'description' => 'Wow I \'am learning laravel with sahel this is updated record']);

// });
// Route::get('delete' , function(){
        
    // $posts = Post::find(5);
    // Post::destroy([7,8]);
    // Post::where('in_admin' , 0)->delete();


// });


Route::get('user/{id}/post' , function($id){
    
      return User::find($id)->post->description;
});

Route::get('/softdelete/{id}' , function($id){
    
    $post = Post::find($id);
    $post->delete();
});
Route::get('/read' , function(){
    
    $post = Post::all();
       return $post;
});
Route::get('/readsoftdelete' , function(){
    $post = Post::withTrashed()->get();
     return $post;
});

Route::get('/readsoftdeleteonly' , function(){
    $post = Post::onlyTrashed()->get();
     return $post;
});
Route::get('/restore' , function(){
    $post = Post::withTrashed()->where('in_admin' , '0');
     $post->restore();
});
Route::get('/hardDelete' , function(){
    $post = Post::where('in_admin' , '0');
     $post->forceDelete();
});

Route::get ('/onetoone' , function(){
    
     $user = User::find(1);
     $post = $user->postttttt;
     return $post;
});
Route::get ('/onetomany' , function(){
    
     $post = Post::find(1);
     $comment = $post->comments->pluck('body');
     return $comment;
});

Route::get ('/user/{id}/role' , function($id){
    
     $user = User::find($id)->roles;
      
      return $user->pluck('name');

});










           






