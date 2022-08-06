<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $table = 'ratings';
    protected $fillable = [
        'value',
        'book_id',
        'author_id',
    ];

    public function books()
    {
        return $this->belongsTo(Book::class);
    }

    public function authors()
    {
        return $this->belongsTo(Author::class);
    }
}
