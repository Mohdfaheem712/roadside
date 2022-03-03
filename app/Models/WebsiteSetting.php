<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebsiteSetting extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'email',
        'phone',
        'logo',
        'address',
        'longitude',
        'latitude',
        'facebook_url',
        'instagram_url',
        'twitter_url'
    ];
}
