<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogger;

class BloggerController extends Controller
{
    public function roles(){
        return Blogger::find(5)->roles;
    }
}
