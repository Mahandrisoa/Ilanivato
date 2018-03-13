<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class MahafantatraFeno extends Model
{
    protected $table = 'mahafantatra_feno';
    protected $fillable = ['jour', 'andininy_maraina', 'soratra_masina_maraina', 'andininy_hariva', 'soratra_masina_hariva', 'mois'];
}
