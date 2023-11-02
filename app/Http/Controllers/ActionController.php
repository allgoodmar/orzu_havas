<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use function App\Http\Controllers\custom_format_number as ControllersCustom_format_number;

class ActionController extends Controller
{
    function telegram(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'fathername' => 'required',
            'pinfl' => 'required',
            'passport' => 'required',
            'phone_number' => 'required',
            'region' => 'required'
        ]);

        function custom_format_number($number) {
            if ($number >= 1000000) {
                return number_format($number / 1000000, 0, '.', ' ') . ' 000 000';
            } else {
                return number_format($number, 0, '.', ' ');
            }
        }

        // SEND DATA TO ALLGOODNASIYA
        $data = [
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'fathername' => $request->input('fathername'),
            'pinfl' => $request->input('pinfl'),
            'passport' => $request->input('passport'),
            'region' => $request->input('region'),
            'phone_number' => $request->input('phone_number'),
            'bin_code_or_card' => $request->input('card_number'),
            'expiry' => $request->input('expiry'),
            'source' => "Orzu Havas",
        ];
    
        $response = Http::post('https://allgoodnasiya.uz/api/v1/send-data', $data);
        $result = json_decode($response->body());

        /*
        $botToken = "6020109850:AAG3CV00uRopavR-QgOnmD9SYqEsr9tV-8M";
        $chat_id = "@algdscrngfrlds";
        $smile = '👉';
        //$link = "http://extab.uz/fullpage.php?id=".$idd;
        $caption = "Источник: orzuhavas.uz"
        .PHP_EOL."Ф.И.О: ".$request->name . " " . $request->lastname . " " . $request->fathername
        .PHP_EOL."ПИНФЛ: ".$request->pinfl
        .PHP_EOL."Лимит: ".Custom_format_number($request->limit)
        .PHP_EOL."Паспорт: ".$request->passport
        .PHP_EOL."Область: ".$request->region
        .PHP_EOL."Тел: ".$request->phone_number
        .PHP_EOL."Карта: ".$request->card_number
        .PHP_EOL."Срок: ".$request->expiry
        .PHP_EOL."Комментарий: ".$request->comment
        .PHP_EOL.PHP_EOL."Перейти: https://allgoodnasiya.uz/merchant/calculator/list/show/".$result;//$smile.' '.$link;
        $photo = "https://c4.wallpaperflare.com/wallpaper/394/308/979/leonardo-dicaprio-leonardo-dicaprio-the-wolf-of-wall-street-jordan-belfort-wallpaper-preview.jpg";
        $bot_url = "https://api.telegram.org/bot$botToken/";
        $url = $bot_url."sendPhoto?chat_id=".$chat_id."&photo=".urlencode($photo)."&caption=".urlencode($caption);
        file_get_contents($url);
        */

        return redirect()->route('redirectToFinish');
    }

    public function redirectToFinish()
    {
        return view('front.calculator_finish');
    }

    function callBackTelegram(Request $request) {
        $request->validate([
            'phone_number' => 'required',
        ]);

        $botToken = "6020109850:AAG3CV00uRopavR-QgOnmD9SYqEsr9tV-8M";
        $chat_id = "@algdscrngfrlds";
        $smile = '👉';
        //$link = "http://extab.uz/fullpage.php?id=".$idd;
        $caption = "From: orzuhavas.uz"
        .PHP_EOL."Hamkor bo'lish uchun taklif"
        .PHP_EOL."📞 ".$request->phone_number;//$smile.' '.$link;
        $photo = "https://c4.wallpaperflare.com/wallpaper/394/308/979/leonardo-dicaprio-leonardo-dicaprio-the-wolf-of-wall-street-jordan-belfort-wallpaper-preview.jpg";
        $bot_url = "https://api.telegram.org/bot$botToken/";
        $url = $bot_url."sendPhoto?chat_id=".$chat_id."&photo=".urlencode($photo)."&caption=".urlencode($caption);
        file_get_contents($url);

        return redirect()->back()->with('success', __("main.form_10"));
    }
}
