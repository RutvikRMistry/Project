<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $product_id
 * @property string $attribute_name
 * @property string $product_attribute_value
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Product $product
 */
class Product_variant extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['product_id', 'attribute_name', 'product_attribute_value', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Banquet\Product');
    }
}
