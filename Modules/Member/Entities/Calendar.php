<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $fillable = ["group_id","date","event"];

    public $timestamps = false;

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
