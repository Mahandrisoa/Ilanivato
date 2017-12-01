<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'interlude','date_creation'];

    protected $guarded = ['id'];

    public function users() {
        return $this->hasMany('App\User');
    }

    public function historiques() {
        return $this->hasMany('Modules\Member\Entities\Historique');
    }
}
