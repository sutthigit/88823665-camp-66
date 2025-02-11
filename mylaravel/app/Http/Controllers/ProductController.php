<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    function index(){
        return view('product');
    }
    function store(Request $req){
        print_r($req->input());
        $c = new Categories();
        $c->name = $req->category;
        $c->save();

    }
}
