<?php

namespace Modules\Shop\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Shop\Database\factories\ProductImageFactory;

use App\Traits\UuidTrait;

class ProductImage extends Model
{
    use HasFactory, UuidTrait;

    protected $table = 'shop_product_images';

    protected $fillable = [
        'product_id',
        'name',
    ];
    
    protected static function newFactory():
    {
        return \Modules\Shop\database\factories\ProductImageFactory::new();
    }
}
