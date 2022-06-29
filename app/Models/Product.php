<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopePublished(Builder $builder)
    {
        return $builder->whereNotNull('published_at');
    }

    public function scopeVisible(Builder $builder)
    {
        return $builder->whereIsVisible(true);
    }

    public function scopeQtyNotEmpty(Builder $builder)
    {
        return $builder->where('qty', '>', 0);
    }

    public static function readyStock()
    {
        return Product::published()->visible()->qtyNotEmpty()->latest()->get();
    }
}
