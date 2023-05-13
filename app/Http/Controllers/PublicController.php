<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Content;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function index()
    {

        return view('web.pages.index');
    }

    public function dashboard()
    {
        if (Auth::user()->role  == 0) {
            return view('admin.pages.index');
        } else {
            return redirect()->route('user.dashboard');
        }
    }

    public function blogs()
    {
        $blogs = Blog::where('status', '1')->orderBy('id', 'DESC')->get();
        return view('web.pages.blog.index', compact('blogs'));
    }

    public function blogDetails($title)
    {
        $blog = Blog::where('title', $title)->first();
        $content = Content::find(1);
        return view('web.pages.blog.details', compact('blog', 'content'));
    }
    public function completeprofile()
    {

        if (Auth::user()->complete == 1) {
            return redirect()->route('user.dashboard');
        } else {

            return view('web.pages.authentication.student.complete-profile');
        }
    }

    public function userdashboard()
    {
        $user = User::find(Auth::user()->id);
        if (Auth::user()->complete == 1) {
            return view('web.pages.dashboard.index', compact('user'));
        } else {
            return view('web.pages.authentication.student.complete-profile');
        }
    }
    public function createcourse()
    {
        $user = User::find(Auth::user()->id);

        return view('web.pages.courses.create', compact('user'));
    }
}
