<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class Historique extends Model
{
    protected $fillable = ['date','evenement','group_id'];

    public $timestamps = false;

    public function group()
    {
        return $this->belongsTo('App\Group');
    }

    public function images() {
        return $this->hasMany('Modules\Member\Entities\HistoriqueImage');
    }
}
