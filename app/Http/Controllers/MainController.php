<?php

namespace App\Http\Controllers;

class MainController extends Controller
{
    public function init()
    {
        //$response = self::initAPI();
        return view("main", [
            "ONLINE_COUNT" => self::getOnlineCount(0)]);
    }

    public function initAPI()
    {
        $ch = curl_init(env("API_URL")."/si");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $response = json_decode(curl_exec($ch));
        curl_close($ch);

        return $response;
    }

    public function getOnlineCount($response)
    {
        return $response;
    }

    public static function sendCallback($success, $message, $fields = array())
    {
        $response['success'] = $success;
        $response['message'] = $message;
        foreach ($fields as $key => $value) $response[$key] = $value;
        die(json_encode($response));
    }

    public static function sendRequestAPI($method, $params = array())
    {
        $ch = curl_init(env("API_URL")."/".$method."?token=".env("API_TOKEN")."&".http_build_query($params));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $response = json_decode(curl_exec($ch));
        curl_close($ch);

        return $response;
    }

    public static function generateHash($method, $value, $nickname): string
    {
        return hash('sha256', $method).'|'.hash('sha256', $nickname).'|'.hash('sha256', $value).'|'.env("API_SALT");
    }
}
