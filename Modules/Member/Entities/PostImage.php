<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class PostImage extends Model
{
    protected $fillable = ['post_id','path'];

    protected $table = "post_images";

    public function post()
    {
        return $this->belongsTo('Modules\Member\Entities\Post');
    }
}
