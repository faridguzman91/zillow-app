<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //index
    public function index() {
        return "index";
    }

    //show
    public function show() {
        return "show";
    }
}
