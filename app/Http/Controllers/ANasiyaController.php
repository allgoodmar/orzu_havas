<?php

namespace App\Http\Controllers;

use App\Models\NewPost;
use Illuminate\Http\Request;

class ANasiyaController extends Controller
{

    public function show($id) {
        $post = NewPost::where('id', $id)->first();
        return view('front.new_one', compact('post'));
    }

    public function showOne($id) {
        $post = NewPost::select(
            "title_".app()->getLocale() . " as title",
            "body_".app()->getLocale() . " as body",
            "cover_photo",
            "created_at"
        )
        ->where('id', $id)->first();
        return view('front.new_one', compact('post'));
    }

    public function showFull() {
        $posts = NewPost::select(
            "id",
            "title_".app()->getLocale() . " as title",
            "body_".app()->getLocale() . " as body",
            "cover_photo",
            "created_at"
        )
        ->orderBy('id', "DESC")->get();
        return view('front.news', compact('posts'));
    }

    public function create() {
        // return view('merchant.posts.create');
    }

    public function store(Request $request) { /*
        $request->validate([$request->all()]);
        $data = $request->all();
        if($request->hasFile('cover_photo')) {
            //get filename with extension
            $filenamewithextension = $request->file('cover_photo')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('cover_photo')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('cover_photo')->storeAs('public/uploads', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";
            $data['cover_photo'] = $url;
        }
        ANasiyaPost::create($data);
        return redirect()->back();*/
    }

    public function edit($id) {

    }

    public function update($id) {

    }

    public function destroy($id) {

    }

    public function upload(Request $request)
    {   /*
        if($request->hasFile('upload')) {
            //get filename with extension
            $filenamewithextension = $request->file('upload')->getClientOriginalName();

            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);

            //get file extension
            $extension = $request->file('upload')->getClientOriginalExtension();

            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;

            //Upload File
            $request->file('upload')->storeAs('public/uploads', $filenametostore);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('storage/uploads/'.$filenametostore);
            $msg = 'Image successfully uploaded';
            $re = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            // Render HTML output
            @header('Content-type: text/html; charset=utf-8');
            echo $re;
        }*/
    }
}
