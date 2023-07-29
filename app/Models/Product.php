<?php

namespace App\Models;

use App\Models\ProductGalery;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'name', 'price', 'description', 'slug'
    ];

    /**
     * Get all of the galleries for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function galleries(): HasMany
    {
        return $this->hasMany(ProductGalery::class, 'products_id', 'id');
    }

}
