<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($langVal)
    {
        // return $lang;
       Session::put("locale",$langVal);
       return response()->json(['success'=>'Language change successfully.']);

    }
}
