<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $post=Post::count();
        $user=User::count();
        $role = Role::count();
        $page = Page::count();
        $comment = Comment::count();

        return view('Backend.Dashboard.index',compact('post','user','role','page','comment'));
    }
}
