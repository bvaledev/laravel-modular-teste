<?php

namespace App\Modules\Blog\Http\Controllers;

use App\Core\Http\Controllers\Controller;

class IndexController extends Controller{
    public function index(){
        return view('blog::index');
    }
}
