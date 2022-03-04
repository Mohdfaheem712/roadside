<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->delete();
        $images = [
        [
            'title' => 'G1',
            'image_url' => 'images/gallery/g1.jpg',
            'status' => 1
        ],[
            'title' => 'G2',
            'image_url' => 'images/gallery/g2.jpg',
            'status' => 1
        ],[
            'title' => 'G3',
            'image_url' => 'images/gallery/g3.jpg',
            'status' => 1
        ],[
            'title' => 'G4',
            'image_url' => 'images/gallery/g4.jpg',
            'status' => 1
        ],[
            'title' => 'G5',
            'image_url' => 'images/gallery/g5.jpg',
            'status' => 1
        ],[
            'title' => 'G6',
            'image_url' => 'images/gallery/g6.jpg',
            'status' => 1
        ]
        ];
        foreach($images as $image){
            Gallery::create($image);
        }
    }
}
