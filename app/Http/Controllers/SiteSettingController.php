<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SiteSettingController extends Controller
{
    public function index(SiteSetting $siteSetting){
        $siteSetting=$siteSetting->all();
        return view('admin.siteSetting.index',compact('siteSetting'));
    }
    public function store(Request $request,SiteSetting $siteSetting)
    {
        foreach (array_except($request->toArray(),['_token','submit']) as $key=> $req){
            $siteUpdate=$siteSetting->where('nameSetting',$key)->first();
            $siteUpdate->fill(['value'=>$req])->save();

        }

        return Redirect::back()->with('تم التعديل علي الاعدادات بنجاح');

    }
}
