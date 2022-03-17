<?php

use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\Storage;

$setting = WebsiteSetting::find(1);

return [
    'title'         => $setting->title,
    'email'         => $setting->email,
    'phone'         => $setting->phone,
    'logo'          => Storage::url($setting->logo),
    'address'       => $setting->address,
    'longitude'     => $setting->longitude,
    'latitude'      => $setting->latitude,
    'facebook_url'  => $setting->facebook_url,
    'instagram_url' => $setting->instagram_url,
    'twitter_url'   => $setting->twitter_url,
    'youtube_url'   => $setting->youtube_url,
];
