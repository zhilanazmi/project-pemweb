<?php

namespace Modules\Shop\app\Models;

use App\Traits\UuidTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\factories\AttributeOptionFactory;

use App\Traits\UuidTrait;

class AttributeOption extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'shop_attribute_options';

    protected $fillable = [
        'attribute_id',
        'name',
        'slug',
    ];
    
    protected static function newFactory(): AttributeOptionFactory
    {
        //return AttributeOptionFactory::new();
    }
}
