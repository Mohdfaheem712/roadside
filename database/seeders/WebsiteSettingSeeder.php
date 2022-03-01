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
            'email' => 'admin@roadsideromeos.com',
            'phone' => '7785951700',
        ]);
    }
}
