<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class Tresorier extends Model
{
    protected $fillable = ['name','group_id'];

    protected $table = 'tresoriers';

    public $timestamps = false;

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
