<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //index
    public function index() {
         dd(Listing::all());
        return inertia(
            'Index/index',
            [
                'message' => 'hello from laravel'
            ]
        );
    }

    //show
    public function show() {
        return inertia(
            'Index/show'
        );
    }
}
