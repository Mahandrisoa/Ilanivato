<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['content', 'group_id', 'type_post_id', 'titre','hasPosts','isValid'];

    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function type()
    {
        return $this->belongsTo('Modules\Member\Entities\TypePost');
    }

    public function comments()
    {
        return $this->hasMany('Modules\Member\Entities\Comment');
    }

    public function images()
    {
        return $this->hasMany('Modules\Member\Entities\Image');
    }
}
