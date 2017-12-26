<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class President extends Model
{
    protected $fillable = ['name', 'group_id', 'avatar'];

    protected $table = 'presidents';

    public $timestamps = false;
    
    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
