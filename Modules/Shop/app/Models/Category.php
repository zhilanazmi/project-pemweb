<?php

namespace Modules\Shop\app\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Traits\UuidTrait;
class Category extends Model
{
    use HasFactory, UuidTrait;

    /**
     * The attributes that are mass assignable.
     */

    protected $table = 'shop_categories';
    protected $fillable = [
        'parent_id',
        'slug',
        'name',
    ];
    
    protected static function newFactory()
    {
        return \Modules\Shop\database\factories\CategoryFactory::new();
    }

    public function children()
    {
        return $this->hasMany('Modules\Shop\app\Models\Category', 'parent_id');
    }

    public function parent()
    {
        return $this->belongsTo('Modules\Shop\app\Models\Category', 'parent_id');
    }

    public function products()
    {
        return $this->belongsToMany('Modules\Shop\app\Models\Product', 'shop_categories_products', 'product_id', 'category_id');
    }
}
