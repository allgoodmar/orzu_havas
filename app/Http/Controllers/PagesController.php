<?php

namespace App\Http\Controllers;

use App\Models\NewPost;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $posts = NewPost::select(
            "id",
            "title_".app()->getLocale() . " as title",
            "body_".app()->getLocale() . " as body",
            "cover_photo",
            "created_at"
        )
        ->orderBy('id', "DESC")->limit(3)->get();
        return view('front.index', compact('posts'));
    }

    public function shops()
    {
        return view('front.shops');
    }

    public function myclients()
    {
        return view('merchant.myclients');
    }

    public function clientorderPhone()
    {
        return view('clientorder.phone');
    }

    public function clientorderShow()
    {
        return view('clientorder.show');
    }

    public function scoring()
    {
        return view('merchant.scoring');
    }
}
