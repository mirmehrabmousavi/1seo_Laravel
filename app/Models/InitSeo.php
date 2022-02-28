<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InitSeo extends Model
{
    use HasFactory;

    protected $fillable = ['site_id','type_site','keyword_site','local_site'];

    public function site()
    {
        return $this->hasOne(Site::class);
    }
}
