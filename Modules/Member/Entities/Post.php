<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['content','group_id'];

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
