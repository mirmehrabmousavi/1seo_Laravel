<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OffSeoAction extends Model
{
    use HasFactory;

    protected $fillable = ['action','baseurl','url'];
}
