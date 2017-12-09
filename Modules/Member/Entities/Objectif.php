<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class Objectif extends Model
{
    protected $fillable = ['intitule','group_id'];

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
