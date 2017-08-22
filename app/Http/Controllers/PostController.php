<?php
/**
 * Created by PhpStorm.
 * User: dmjema
 * Date: 8/10/17
 * Time: 6:32 PM
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class PostController extends Controller {
    public function getBlogIndex(){
        //fetch blog post and paginate
        $posts = Post::paginate(6);
        foreach ($posts as $post){
            $post->body = $this->shortMessageContent($post->body, 20);
        }
        return view('frontend.blog.index', ['posts' => $posts]);
    }

    public function getPostIndex(){
        $posts = Post::paginate(6);
        return view('admin.blog.index', ['posts' => $posts]);
    }

    public function getSinglePost($post_id, $end = 'frontend'){

        $post = Post::find($post_id);
        if (!$post){
            return redirect()->route('blog.index')->with(['fail'=> 'post not found!']);
        }
        return view($end.'.blog.single', ['post'=> $post]);
    }

    public function getCreatePost(){
        return view('admin.blog.create_post');
    }

    public function postCreatePost(Request $request){
        $this->validate($request, [
            'title' => 'required|max:120|unique:posts',
            'author' => 'required|max:80',
            'body' => 'required'
        ]);

        $post = new post();
        $post->title = $request['title'];
        $post->author = $request['author'];
        $post->body = $request['body'];
        $post->save();

        //attach category

        return redirect()->route('admin.index')->with(['success' => 'post successfully created']);
    }

    private function shortMessageContent($text, $word_target_count){
        if (str_word_count($text, 0)> $word_target_count){
            $words = str_word_count($text, 2);
            $pos = array_keys($words);
            $text = substr($text,0, $pos[$word_target_count]).'...';
        }

        return $text;
    }
    
    public  function getPostUpdate($post_id){
        $post = Post::find($post_id);
        if (!$post){
            return redirect()->route('blog.index')->with(['fail'=> 'post not found!']);
        }
        
        //find categories
        return view('admin.blog.edit_post', [ 'post' => $post]);
    }

    public function  postPostUpdate(Request $request){
        $this->validate($request, [
            'title' => 'required|max:120',
            'author' => 'required|max:80',
            'body' => 'required'
        ]);

        $post = Post::find($request['post_id']);
        $post->title = $request['title'];
        $post->author = $request['author'];
        $post->body = $request['body'];
        $post->update();

        // Attach category
        return redirect()->route('admin.index')->with(['success' => 'post successfully updated!']);
    }
    
    public function getDelete($post_id){
        $post = Post::find($post_id);
        if (!$post){
            return redirect()->route('blog.index')->with(['fail'=> 'post not found!']);
        }
        /*Delete posts*/
        $post->delete();
        
        return redirect()->route('admin.index')->with(['success'=>'post successfully deleted!']);
    }
}