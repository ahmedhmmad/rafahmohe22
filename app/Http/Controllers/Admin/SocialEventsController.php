<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SocialEvent;
use Illuminate\Http\Request;

class SocialEventsController extends Controller
{
    //
    public function viewSocial()
    {
        return SocialEvent::all();
    }

    public function addSocial(Request $request)
    {
        $result = SocialEvent::insert(
            [


                'social_writer' => 'admin',
                'social_department' => $request->department,
                'social_title' => $request->title,
                'social_description' => $request->descrption,
                'social_main_image' => $request->main_image,
                'social_second_image' => $request->second_image,

            ]
        );
        if ($result) return 1;
        else return 0;
    }
}
