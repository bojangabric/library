<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $primaryKey = 'BookID';

    public function author()
    {
        return $this->hasOne(Author::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class, 'BookID');
    }

    public function getRating()
    {
        $str = '';
        for ($i=0; $i < $this->StarRating; $i++) { 
            $str .= '&#9733;';
        }

        for ($i=$this->StarRating; $i < 5; $i++) { 
            $str .= '&#9734;';
        }
        return $str;
    }
}
