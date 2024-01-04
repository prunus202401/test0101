<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    /**
    * Post一覧を表示する
    * 
    * @param Post Postモデル
    * @return array Postモデルリスト
    */
    public function index(Post $post)//インポートしたPostをインスタンス化して$postとして使用。
    {
        // return $post->get();//$postの中身を戻り値にする。
        
        // return view('posts.index')->with(['posts' => $post->get()]);  
       //blade内で使う変数'posts'と設定。'posts'の中身にgetを使い、インスタンス化した$postを代入。
       
        // return view('posts.index')->with(['posts' => $post->getByLimit()]);
        
        //getPaginateByLimit()はPost.phpで定義したメソッドです。
        return view('posts.index')->with(['posts' => $post->getPaginateByLimit()]);
    }
}
