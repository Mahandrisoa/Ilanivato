<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class TypePost extends Model
{
    protected $fillable = ["libelleType","type_post_id"];

    public function parent()
    {
        return $this->belongsTo('Modules\Member\Entities\TypePost');
    }
}
