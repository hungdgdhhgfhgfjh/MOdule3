<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book_detail extends Model
{
    use HasFactory;
    protected $table = 'book_details';
    public $timestamps = false;
}
