<?php

namespace App\Http\Controllers;

use App\Mail\MailGetInfo;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BackendController extends BaseController
{
    public function sendMail(Request $request)
    {
        $data = $request->form_data;
        $name = '';
        $phone = '';
        foreach ($data as $value) {
            if ($value['name'] == 'name') {
                $name = $value['value'] ?? '';
            }
            if ($value['name'] == 'phone') {
                $phone = $value['value'] ?? '';
            }
        }
        Mail::to(env('MAIL_ADMIN'))->queue(new MailGetInfo($name, $phone));
        return response()->json([
            'code' => '200',
            'data' => '',
            'message' => 'success'
        ]);
    }
}
