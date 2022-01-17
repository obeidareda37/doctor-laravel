<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable=['name' , 'image' , 'comment' , 'status' , 'country' , 'city'];

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('images/' . $this->image);
        }

        return asset('images/default-image.png');
    }

   
}
