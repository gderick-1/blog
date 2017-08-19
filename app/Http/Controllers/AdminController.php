<?php
/**
 * Created by PhpStorm.
 * User: dmjema
 * Date: 8/11/17
 * Time: 11:25 AM
 */

namespace App\Http\Controllers;

use App\Post;

class AdminController extends Controller{
    public function getAdminIndex(){
        $posts = Post::orderBy('created_at', 'desc')->take(4)->get();
        return view('admin.index', ['posts' => $posts]);
    }
}