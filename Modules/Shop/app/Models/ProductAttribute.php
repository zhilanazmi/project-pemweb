<?php

namespace Modules\Shop\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\factories\ProductAttributeFactory;

use App\Traits\UuidTrait;

class ProductAttribute extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'shop_product_attributes';

    protected $fillable = [
        'product_id',
        'attribute_id',
        'string_value',
        'text_value',
        'boolean_value',
        'integer_value',
        'float_value',
        'datetime_value',
        'date_value',
        'json_value',
    ];
    protected static function newFactory()
    {
        return \Modules\Shop\database\factories\ProductAttributeFactory::new();
    }

    public function product()
    {
        return $this->belongsTo('Modules\Shop\Entities\Product');
    }

    public function attribute()
    {
        return $this->belongsTo('Modules\Shop\Entities\Attribute');
    }
}
