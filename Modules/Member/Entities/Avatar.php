<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Avatar
 * Logo ou avatar de chaque utilisateur
 * @package Modules\Member\Entities
 */
class Avatar extends Model
{
    public $timestamps = false;

    protected $fillable = ['avatarName','path','group_id'];
    
}
