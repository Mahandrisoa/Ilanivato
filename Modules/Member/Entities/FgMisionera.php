<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class FgMisionera extends Model
{
    protected $fillable = ['intitule'];

    protected $table = 'fg_misionera';

    public function images() {
        return $this->hasMany('Modules\Member\Entities\FgMImage');
    }
}
