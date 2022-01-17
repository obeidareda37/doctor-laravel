<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable=['country' , 'city' , 'email' ,'postal_code', 'phone','first_time' , 'last_time' , 'facebook_account' , 'twitter_account' , 'instagram_account' , 'logo' , 'bg_image'];
    public function getBackgroundUrlAttribute()
    {
        if ($this->bg_image) {
            return asset('images/' . $this->bg_image);
        }

        return asset('images/default-image.png');
    }
    public function getLogoUrlAttribute()
    {
        if ($this->logo) {
            return asset('images/' . $this->logo);
        }

        return asset('images/default-logo.png');
    }
}
