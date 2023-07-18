<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Models\Group;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Models\User;

// Страницы
Route::get('/', [MainController::class, 'init']);

Route::get('/cabinet', function () {
    if (!Session::has("nickname"))
        return redirect("/login");

    $user = new User(Session::get("nickname"));
    $group = Group::tryFrom($user->getGroupId());
    return view("cabinet", ["user" => $user, "group" => $group]);
});

Route::get('/cabinet/friends', function () {
    if (!Session::has("nickname"))
        return redirect("/login");

    $user = new User(Session::get("nickname"));
    return view("friends", ["user" => $user]);
});

Route::get('/cabinet/stats', function () {
    if (!Session::has("nickname"))
        return redirect("/login");

    $user = new User(Session::get("nickname"));
    return view("stats", ["user" => $user]);
});

Route::get('/cabinet/applications', function () {
    if (!Session::has("nickname"))
        return redirect("/login");

    $user = new User(Session::get("nickname"));
    return view("applications", ["user" => $user]);
});

Route::get('/cabinet/applications-create', function () {
    if (!Session::has("nickname"))
        return redirect("/login");

    $user = new User(Session::get("nickname"));
    return view("applications-create", ["user" => $user]);
});

Route::get('/login', function () {
    if (Session::has("nickname"))
        return redirect("/cabinet");
    return view("login");
});

// Запросы
Route::post('/auth/login', [AuthController::class, 'login']);
Route::get('/auth/logout', [AuthController::class, 'logout']);
