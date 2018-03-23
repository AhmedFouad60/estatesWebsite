<?php

function getSetting($settingName='sitename'){
    return \App\SiteSetting::where('nameSetting',$settingName)->first()->value;

}