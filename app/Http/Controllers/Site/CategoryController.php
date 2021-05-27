<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// make:controller nomeController -r
    // cria o controller especifico para crud

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.category.index');
    }

    /**
     * @param  slud
     */
    public function show($slug)
    {
       return view('site.category.show', ['slug' => $slug]);
    }
}
