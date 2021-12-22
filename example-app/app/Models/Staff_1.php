<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff_1 extends Model
{

    
    use HasFactory;
    protected $table =  "staff_1";
    public $timestamp = false;
    public $fillable = [
    "name_staff","position"
    ];
    
    
}
