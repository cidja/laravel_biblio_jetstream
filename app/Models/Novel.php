<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novel extends Model
{
    use HasFactory;
    protected $table = "novels";
    protected $fillable=['title','author','isbn','genre','format','page_count','cover'];
}
