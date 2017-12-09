<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class Conseiller extends Model
{
    protected $fillable = ['name','group_id'];

    protected $table = 'conseillers';

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
