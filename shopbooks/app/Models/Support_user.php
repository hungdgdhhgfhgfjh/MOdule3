<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Support_user extends Model
{
    use HasFactory;
    protected $table      = 'support_users';
    public    $timestamp  = false;
}
