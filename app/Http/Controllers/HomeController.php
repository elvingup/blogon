<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('blog/home', [
            // orderBy ASC = Crescente e DESC = Decrescente
            'articles' => Articles::orderBy('id','desc')->limit(3)->get()
        ]);
    }
}
