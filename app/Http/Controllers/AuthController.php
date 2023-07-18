<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $nickname = $request->get("nickname");
        $password = $request->get("password");
        if (empty($password) || empty($nickname))
            MainController::sendCallback(false, "Заполните все поля");
        if (!$this->checkPass($nickname, $password))
            MainController::sendCallback(false, "Вы указали неверный пароль либо игрок не найден");

        Session::put("nickname", $nickname);
        Session::save();
        MainController::sendCallback(true, "Крч ты гей", ['uri' => '/cabinet']);
    }

    public function logout()
    {
        Session::remove("nickname");
        Session::save();
        return redirect("/login");
    }

    public function checkPass($nickname, $password): bool
    {
        $params = array(
            'name' => $nickname,
            'password' => $password
        );
        $response = MainController::sendRequestAPI("cpass", $params);

        if (isset($response->response->code) && $response->response->code == 0) {
            return false;
        }

        return filter_var($response->response->password, FILTER_VALIDATE_BOOLEAN);
    }

    public function register(Request $request)
    {
        $nickname = $request->get("nickname");
        $password = $request->get("password");
        if (empty($password) || empty($nickname))
            MainController::sendCallback(false, "Заполните все поля");
        if (!$this->checkPass($nickname, $password))
            MainController::sendCallback(false, "Вы указали неверный пароль либо игрок не найден");

        Session::put("nickname", $nickname);
        Session::save();

        DB::insert('INSERT INTO `PlayerAuth` VALUES (?, ?)', [1, $password]);

        redirect("/cabinet");

        MainController::sendCallback(true, "Крч ты гей", ['uri' => '/cabinet']);
    }

}
