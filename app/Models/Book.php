<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function publisher(){
        return $this->belongsTo(Publisher::class);
    }

    public function author(){
        return $this->belongsTo(Author::class);
    }

    public function bookType(){
        return $this->belongsTo(BookType::class);
    }
}
