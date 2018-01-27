<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class Toriteny extends Model
{
    protected $fillable = ['date','author','content','group_id'];
    
    protected $table = 'toriteny';
}
