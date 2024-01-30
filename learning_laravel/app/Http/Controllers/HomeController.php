<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Action
    public function index() {
        return 'home';
    }

    public function getcategory() {
        return 'getcategory';
    }
}
