<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [];

    public function post()
    {
        return $this->belongsTo('Modules\Member\Entities\Post');
    }
}
