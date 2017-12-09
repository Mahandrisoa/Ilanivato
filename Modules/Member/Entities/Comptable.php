<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comptable
 * Class pour secretairen'ny vola
 * @package Modules\Member\Entities
 */
class Comptable extends Model
{
    protected $fillable = ['name','group_id'];

    protected $table = 'comptables';

    public function group()
    {
        return $this->belongsTo('App\Group');
    }
}
