<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class VicePresident extends Model
{
    protected $fillable = ['name','group_id'];

    protected $table = 'vice_presidents';

    public $timestamps = false;

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
