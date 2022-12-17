<?php
namespace Level7up\CMS\Http\Controllers;

use Level7up\CMS\Models\Blog;
use Level7up\Dashboard\Http\Controllers\Controller;

Class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        return view('CMS::blogs.index', compact('blogs'));
    }
}