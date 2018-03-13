<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;
use SahusoftCom\EloquentImageMutator\EloquentImageMutatorTrait;

class FgMImage extends Model
{
    use EloquentImageMutatorTrait;

    protected $fillable = ['fg_misionera_id','image_path'];

    protected $table = 'fg_misionera_image';

    protected $image_fields = ['image_path'];

    public function mission() {
        return $this->belongsTo('Modules\Member\Entities\FgMisionera');
    }

}
