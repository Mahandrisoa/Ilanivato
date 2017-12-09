<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class Secretaire extends Model
{
    protected $fillable = ['name','group_id'];

    protected $table = 'secretaires';

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
