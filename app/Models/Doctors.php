<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctors extends Model
{
    use HasFactory;
    protected $fillable=['name' , 'image' , 'description' , 'status'];

    public function getImageUrlAttribute()
    {
        if ($this->image) {
            return asset('images/' . $this->image);
        }

        return asset('images/default-image.png');
    }

    
}
