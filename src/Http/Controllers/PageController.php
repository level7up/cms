<?php
namespace Level7up\CMS\Http\Controllers;

use Illuminate\Http\Request;
use Level7up\CMS\Models\Page;
use Level7up\CMS\DataTables\PagesDataTable;
use Level7up\Dashboard\Http\Controllers\Controller;

Class PageController extends Controller
{
    public function index(PagesDataTable $dt)
    {
        return $dt->render('CMS::pages.index');
    }
    
    public function create()
    {
        return view('CMS::pages.create');
    }
    
    public function store(Request $request)
    {
        Page::create($request->all());
        return redirect()->route('dashboard.pages.index')->with('success', __('cms::keywords.page_created'));         
    }
}