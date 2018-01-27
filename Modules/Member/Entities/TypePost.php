<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class TypePost extends Model
{
    protected $table = "type_posts";

    protected $fillable = ["libelleType","type_post_id"];

    public function parent()
    {
        return $this->belongsTo('Modules\Member\Entities\TypePost');
    }

    public function posts()
    {
        return $this->hasMany('Modules\Member\Entities\Post');
    }
}
