<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\WebsiteSetting;

class WebsiteSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WebsiteSetting::create([
            'title' => 'Roadside Romeos',
            'email' => 'shailja@gmail.com',
            'phone' => '7785951700',
            'logo' => 'images/logo/8CqRN2cOiX9HcH1SKfJG9XA24jHu9PJ0ySKIsOMI.png',
            'address' => 'Lucknow',
            'longitude' => '',
            'latitude' => '',
            'facebook_url' => 'https://facebook.com',
            'twitter_url' => 'https://twitter.com',
            'instagram_url' => 'https://instagram.com',
            'youtube_url' => 'https://youtube.com',
        ]);
    }
}
