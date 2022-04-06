<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogger;
use App\Models\Role;

class BloggerController extends Controller
{
    public function roles(){
        return Blogger::find(5)->roles;
    }
    public function getBloggers(){
        return Role::find(3)->bloggers;
    }
}
