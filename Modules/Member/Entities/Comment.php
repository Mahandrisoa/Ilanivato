<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ["content","post_id"];

    public function post()
    {
        return $this->belongsTo('Modules\Member\Entities\Post');
    }
}
