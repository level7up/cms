<?php
namespace Level7up\Cms\Http\Controllers;

use Illuminate\Support\Str;
use Level7up\Cms\Models\Blog;
use Level7up\Dashboard\Http\Controllers\Controller;

Class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('CMS::blogs.index', compact('blogs'));
    }
}