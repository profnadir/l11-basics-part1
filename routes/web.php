<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/greeting',function(){
    return "hello world";
});


/* Méthodes de Routage Disponibles */

/* Route::get($uri, $callback);
Route::post($uri, $callback);
Route::put($uri, $callback);
Route::patch($uri, $callback);
Route::delete($uri, $callback);
Route::options($uri, $callback); */

/* Route::match(['get', 'post'], '/', function () {
    // ...
});
Route::any('/', function () {
    // ...
}); */

/* Injection de Dépendance */

/* use Illuminate\Http\Request;
Route::get('/users', function (Request $request) {
    dd($request);
}); */

/* Protection CSRF */
/* <form method="POST" action="/profile">
    @csrf
    ...
</form> */

/* Routes de redirection */
/* Route::redirect('/ici', '/la-bas');
Route::redirect('/ici', '/la-bas', 301); */

/* Routes de vue */
/* Route::view('/bienvenue', 'bienvenue');
Route::view('/bienvenue', 'bienvenue', ['name' => 'Taylor']);

php artisan route:list */

/* Paramètres de route */
/* Route::get('/user/{id}', function (string $id) {
    return 'Utilisateur '.$id;
}); */

/* Routes nommées */
/* Route::get('/user/profile', function () {
    // ...
})->name('profile');

// Génération d'URL...
$url = route('profile');
// Génération de redirections...
return redirect()->route('profile'); 

Route::get('/user/{id}/profile', function (string $id) {
    // ...
})->name('profile');
$url = route('profile', ['id' => 1]); */

/* Groupes de routes */
/* Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Utilise les middleware 'first' et 'second'...
    });
    Route::get('/user/profile', function () {
        // Utilise les middleware 'first' et 'second'...
    });
});
Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        // Correspond à l'URL "/admin/users"
    });
});
Route::name('admin.')->group(function () {
    Route::get('/users', function () {
        // La route est nommée "admin.users"...
    })->name('users');
}); */

/* Liaison de modèle de route */
/* use App\Models\User;
Route::get('/users/{user}', function (User $user) {
    return $user->email;
}); */

/* « Spoofing » de méthode de formulaire */
/* <form action="/exemple" method="POST">
    <input type="hidden" name="_method" value="PUT">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>
<form action="/exemple" method="POST">
    @method('PUT')
    @csrf
</form> */


require __DIR__.'/auth.php';
