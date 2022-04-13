<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InitSeoAction extends Model
{
    use HasFactory;

    protected $fillable = ['action','baseurl','keyword','local','related_keyword','url'];
}
