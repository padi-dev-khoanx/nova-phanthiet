<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class BackendController extends BaseController
{
    public function sendMail(Request $request)
    {
//        dd($request->all());
        return response()->json([
            'code' => '200',
            'data' => '',
            'message' => 'success'
        ]);
    }
}
