<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    private $primary_key = 'UserID';

    protected $fillable = [
        'user_id','BookID','Review'
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
