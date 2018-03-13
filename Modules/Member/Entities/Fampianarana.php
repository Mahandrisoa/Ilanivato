<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;

class Fampianarana extends Model
{
    protected $fillable = ['id','titre','contenu','lien_youtube','lien_mp3'];

    protected $table = 'fampianarana';
}
