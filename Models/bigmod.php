<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bigmod extends Model
{
    use HasFactory;
    
    protected $table = 'logindata';
    protected $fillable = ['adminid', 'password'];
}
