<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;
use SahusoftCom\EloquentImageMutator\EloquentImageMutatorTrait;

class HistoriqueImage extends Model
{
    use EloquentImageMutatorTrait;

    protected $fillable = ['image_path','historique_id'];

    protected $table = "historique_images";

    protected $image_fields = ['image_path'];

    public function historique() {
        return $this->belongsTo('Modules\Member\Entities\Historique');
    }
}
