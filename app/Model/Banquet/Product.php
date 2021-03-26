<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $category_id
 * @property int $user_id
 * @property string $product_name
 * @property string $product_image
 * @property string $product_type
 * @property string $status
 * @property int $quantity_on_hand
 * @property int $quantity_available
 * @property float $sale_price
 * @property string $description
 * @property string $description_for_quotations
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Category $category
 * @property User $user
 * @property ProductTag[] $productTags
 * @property ProductVariant[] $productVariants
 * @property QtemplateProduct[] $qtemplateProducts
 * @property QuotationsProduct[] $quotationsProducts
 * @property SalesOrderProduct[] $salesOrderProducts
 */
class Product extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['category_id', 'user_id', 'product_name', 'product_image', 'product_type', 'status', 'quantity_on_hand', 'quantity_available', 'sale_price', 'description', 'description_for_quotations', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Model\Banquet\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\Banquet\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productTags()
    {
        return $this->hasMany('App\Model\Banquet\ProductTag');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productVariants()
    {
        return $this->hasMany('App\Model\Banquet\ProductVariant');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function qtemplateProducts()
    {
        return $this->hasMany('App\Model\Banquet\QtemplateProduct');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotationsProducts()
    {
        return $this->hasMany('App\Model\Banquet\QuotationsProduct');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOrderProducts()
    {
        return $this->hasMany('App\Model\Banquet\SalesOrderProduct');
    }
}
