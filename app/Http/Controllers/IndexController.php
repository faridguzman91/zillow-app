<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //index
    public function index() {
        return inertia(
            'Index/index'
        );
    }

    //show
    public function show() {
        return inertia(
            'Index/show'
        );
    }
}
