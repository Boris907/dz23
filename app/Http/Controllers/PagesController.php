<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $pages = Page::all();
        return view('pages.index',compact('pages'));
    }

    public function show(Page $page){
        return view('pages.show',compact('page'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store()
    {
        $page = Page::create(request([
            'title',
            'alias',
            'content']));

        return redirect('/pages');
    }
}
