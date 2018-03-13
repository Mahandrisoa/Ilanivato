<?php

namespace Modules\Member\Entities;

use Illuminate\Database\Eloquent\Model;
use SahusoftCom\EloquentImageMutator\EloquentImageMutatorTrait;


class Vaovao extends Model
{
    use EloquentImageMutatorTrait;

    protected $fillable = ['information','date','image'];

    protected $table = 'vaovao';

    protected $image_fields = ['image'];
    
}
