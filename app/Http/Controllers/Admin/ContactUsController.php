<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    //
    public function sendMessage(Request $request)
    {
        $result=ContactUs::insert(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'message'=>$request->message
            ]

        );
        if ($result) return 1;
        else return 0;

    }
}
