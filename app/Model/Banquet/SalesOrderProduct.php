<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $order_id
 * @property integer $product_id
 * @property string $product_name
 * @property string $description
 * @property int $quantity
 * @property float $price
 * @property float $sub_total
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Product $product
 * @property SalesOrder $salesOrder
 */
class SalesOrderProduct extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['order_id', 'product_id', 'product_name', 'description', 'quantity', 'price', 'sub_total', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Model\Banquet\Product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salesOrder()
    {
        return $this->belongsTo('App\Model\Banquet\SalesOrder', 'order_id');
    }
}
