<?php
/**
 * Created by PhpStorm.
 * User: dmjema
 * Date: 8/22/17
 * Time: 2:10 AM
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Response;
class CategoryController extends Controller{
    public function getCategoryIndex(){
        $categories = Category::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.blog.category', ['categories' => $categories]);
    }
}
