<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    use HasFactory;

    protected $fillable = ['id','sites','user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function initSeo()
    {
        return $this->belongsTo(InitSeo::class);
    }
}
