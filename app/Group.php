<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Group extends Model
{
    use Notifiable;

    protected $fillable = ['name', 'interlude', 'directoryName', 'hasToriteny'];

    protected $guarded = ['id'];

    public function users() {
        return $this->hasMany('App\User');
    }

    public function president() {
        return $this->hasOne('Modules\Member\Entities\President');
    }

    public function vicePresident() {
        return $this->hasOne('Modules\Member\Entities\VicePresident');
    }

    public function secretaire() {
        return $this->hasOne('Modules\Member\Entities\Secretaire');
    }

    public function comptable() {
        return $this->hasOne('Modules\Member\Entities\Comptable');
    }

    public function tresorier() {
        return $this->hasOne('Modules\Member\Entities\Tresorier');
    }

    public function avatar()
    {
        return $this->hasOne('Modules\Member\Entities\Tresorier');
    }

    public function conseillers() {
        return $this->hasMany('Modules\Member\Entities\Conseiller');
    }

    public function historiques() {
        return $this->hasMany('Modules\Member\Entities\Historique');
    }

    public function objectifs() {
        return $this->hasMany('Modules\Member\Entities\Objectif');
    }

    public function posts() {
        return $this->hasMany('Modules\Member\Entities\Post');
    }
}
