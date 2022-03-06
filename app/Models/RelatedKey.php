<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RelatedKey extends Model
{
    use HasFactory;

    protected $table = 'related_key';

    protected $fillable = ['keyword_id','related_site'];
}
