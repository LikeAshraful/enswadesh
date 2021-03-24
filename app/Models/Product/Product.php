<?php

namespace App\Models\Product;

use App\Models\User;
use App\Models\Shop\Shop;
use Illuminate\Support\Str;
use App\Models\Product\Base\Size;
use App\Models\General\Brand\Brand;
use App\Models\Product\Base\Weight;
use App\Models\Product\ProductMedia;
use App\Models\Product\ProductCategory;
use Illuminate\Database\Eloquent\Model;
use App\Models\General\Category\Category;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'ref', 'name', 'slug', 'sku', 'shop_id', 'user_id', 'brand_id', 'thumbnail',
        'can_bargain', 'product_type', 'return_policy', 'warranty', 'guarantee', 'currency_type', 'discount', 'discount_type', 'description',
        'offers', 'price', 'stocks', 'total_stocks', 'tag', 'alert', 'video_url',
    ];
    protected $dates = ['deleted_at'];

    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::of($value)->slug('-');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function productCategory()
    {
        return $this->hasOne(ProductCategory::class);
    }

    public function productImage()
    {
        return $this->hasMany(ProductMedia::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class, (new ProductSize())->getTable())
            ->withPivot('price', 'stocks')
            ->withTimestamps();
    }

    public function weights()
    {
        return $this->belongsToMany(Weight::class, (new ProductWeight())->getTable())
            ->withPivot('price', 'stocks')
            ->withTimestamps();
    }

    public function features()
    {
        return $this->hasMany(ProductFeature::class);
    }

    public function discountPrice()
    {
        if ($this->discount_type === 'Percent') {
            $dis = $this->price - ($this->price * $this->discount) / 100;
            return round($dis, 2);
        } else {
            return $this->price - $this->discount;
        }
    }

}
