<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class MahafantatraFeno extends Model
{
    protected $table = 'mahafantatra_feno';
    protected $fillable = ['jour', 'fandaharana_maraina', 'soratra_masina_maraina', 'fandaharana_hariva', 'soratra_masina_hariva', 'mois'];
    public $timestamps = false;
}
