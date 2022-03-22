<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electronicmod extends Model
{
    use HasFactory;

    protected $table = 'electronics';
    protected $fillable = ['ename', 'edesc'];
}
