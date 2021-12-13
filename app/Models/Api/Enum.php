<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enum extends Model
{
    use HasFactory;
    protected $table = 'enums';
    protected $fillable = ['name', 'type'];
}
