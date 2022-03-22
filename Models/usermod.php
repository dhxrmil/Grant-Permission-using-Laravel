<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usermod extends Model
{
    use HasFactory;

    protected $table= 'useradd';
    protected $fillable = ['name', 'email', 'password'];
}
