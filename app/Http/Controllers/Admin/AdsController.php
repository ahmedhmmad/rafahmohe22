<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ads;
use Illuminate\Http\Request;

class AdsController extends Controller
{
    //
    public function viewAds()
    {
        return Ads::all();
    }

    public function addAds(Request $request)
    {
        $result = Ads::insert(
            [
                'ads_writer' => 'admin',
                'ads_department' => $request->department,
                'ads_title' => $request->title,
                'ads_description' => $request->descrption,
                'ads_main_image' => $request->main_image,
                'ads_second_image' => $request->second_image,

            ]
        );
        if ($result) return 1;
        else return 0;
    }
}
