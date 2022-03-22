<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permissionmod extends Model
{
    use HasFactory;

    protected $table = 'permission';
    protected $fillable = ['userid', 'category', 'create', 'read', 'update', 'delete'];
}
