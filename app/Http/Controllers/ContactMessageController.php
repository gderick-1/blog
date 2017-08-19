<?php
/**
 * Created by PhpStorm.
 * User: dmjema
 * Date: 8/11/17
 * Time: 11:25 AM
 */

namespace App\Http\Controllers;

class ContactMessageController extends Controller{
    public function getContactIndex(){
        return view('frontend.other.contact');
    }
}