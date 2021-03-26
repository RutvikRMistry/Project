<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property int $unit_id
 * @property int $brand_id
 * @property int $category_id
 * @property string $name
 * @property string $type
 * @property int $sub_category_id
 * @property int $tax
 * @property string $tax_type
 * @property boolean $enable_stock
 * @property int $alert_quantity
 * @property string $sku
 * @property string $barcode_type
 * @property float $expiry_period
 * @property string $expiry_period_type
 * @property boolean $enable_sr_no
 * @property string $weight
 * @property string $product_custom_field1
 * @property string $product_custom_field2
 * @property string $product_custom_field3
 * @property string $product_custom_field4
 * @property string $image
 * @property int $created_by
 * @property string $created_at
 * @property string $updated_at
 * @property Brand $brand
 * @property Business $business
 * @property Category $category
 * @property Unit $unit
 */
class Product extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['business_id', 'unit_id', 'brand_id', 'category_id', 'name', 'type', 'sub_category_id', 'tax', 'tax_type', 'enable_stock', 'alert_quantity', 'sku', 'barcode_type', 'expiry_period', 'expiry_period_type', 'enable_sr_no', 'weight', 'product_custom_field1', 'product_custom_field2', 'product_custom_field3', 'product_custom_field4', 'image', 'created_by', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function brand()
    {
        return $this->belongsTo('App\Model\Pos\Brand');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function business()
    {
        return $this->belongsTo('App\Model\Pos\Business');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo('App\Model\Pos\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function unit()
    {
        return $this->belongsTo('App\Model\Pos\Unit');
    }
}
