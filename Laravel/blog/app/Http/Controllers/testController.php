<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    //

    function add($num1, $num2, $operator)
    {
        if ($operator == 'plus') {
            return $num1 + $num2;
        } else if ($operator == 'sub') {
            return $num2 - $num1;
        } else if ($operator == 'dev') {
            return $num2 / $num1;
        } else {
            return $num1 * $num2;
        }
    }

    function second()
    {
        return view('getdata');
    }

    function getData(Request $request)
    {
        //db save

        return redirect('/secondcontrolleroute')->with(['success' => $request->name]);
    }
}
