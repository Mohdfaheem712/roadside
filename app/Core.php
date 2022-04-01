<?php

namespace App;
use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Core
{
    public function getConfigData($field)
    {
        if(Schema::hasTable('website_settings')) {
            $setting =  DB::table('website_settings')->where('id',1)->first();
            if($field == 'logo'){
                return Storage::url($setting->$field);
            }
            return $setting->$field;
        }else{
            return null;
        }
    }
}