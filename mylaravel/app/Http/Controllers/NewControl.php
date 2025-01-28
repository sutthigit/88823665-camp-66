<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class NewControl extends Controller
{
    //
    function multitable(Request $req, $var1=""){
        $data['value_id'] = $var1;
        $data['myinput'] = $req->input('myinput');
        return view('NewView',$data);
    }
}
