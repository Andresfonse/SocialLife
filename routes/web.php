<?php


use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pepe', function (){
    return view('pepe');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

//route de google


Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
    //dd($user);
 $userExists = User::where('external_id', $user->id)->where('external_auth', 'google')->first();

 if($userExists) {
    Auth::login($userExists);
 } else {
    $userNew = User::create([
        'name'=> $user->name,
        'email'=> $user->email,
        'avatar'=> $user->avatar,
        'external_id'=> $user->id,
        'external_auth'=> 'google',
    ]);
    Auth::login($userNew);
 }

 return redirect('/dashboard');
    // $user->token
});

//Route de facebbok 

Route::get('/login-facebook', function () {
    return Socialite::driver('facebook')->redirect();
});
 


Route::get('/facebook-callback', function () {
    $user = Socialite::driver('facebook')->user();
    dd($user);
 $userExists = User::where('external_id', $user->id)->where('external_auth', 'facebook')->first();

 if($userExists) {
    Auth::login($userExists);
 } else {
    $userNew = User::create([
        'name'=> $user->name,
        'email'=> $user->email,
        'avatar'=> $user->avatar,
        'external_id'=> $user->id,
        'external_auth'=> 'facebook',
    ]);
    Auth::login($userNew);
 }

 return redirect('/dashboard');
    // $user->token
});


//Route de github llama al call-back si funiona retorna si no pos no we

Route::get('/login-github', function () {
    return Socialite::driver('github')->redirect();
});
 


Route::get('/github-callback', function () {
    $user = Socialite::driver('github')->user();
   //dd($user);
 $userExists = User::where('external_id', $user->id)->where('external_auth', 'github')->first();

 if($userExists) {
    Auth::login($userExists);
 } else {
    $userNew = User::create([
        'name'=> $user->name,
        'email'=> $user->email,
        'avatar'=> $user->avatar,
        'external_id'=> $user->id,
        'external_auth'=> 'github',
    ]);
    Auth::login($userNew);
 }

 return redirect('/dashboard');
    // $user->token
});
 


 

