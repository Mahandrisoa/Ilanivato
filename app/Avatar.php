<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    protected $fillable = ['avatarName', 'group_id'];

    protected $table = 'avatars';

    public $timestamps = false;

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
