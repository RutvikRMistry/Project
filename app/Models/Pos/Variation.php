<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $product_id
 * @property string $sub_sku
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property PurchaseLine[] $purchaseLines
 * @property StockAdjustmentLine[] $stockAdjustmentLines
 * @property TransactionSellLine[] $transactionSellLines
 * @property VariationLocationDetail[] $variationLocationDetails
 */
class Variation extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'product_id', 'sub_sku', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchaseLines()
    {
        return $this->hasMany('App\Models\Pos\PurchaseLine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stockAdjustmentLines()
    {
        return $this->hasMany('App\Models\Pos\StockAdjustmentLine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactionSellLines()
    {
        return $this->hasMany('App\Models\Pos\TransactionSellLine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function variationLocationDetails()
    {
        return $this->hasMany('App\Models\Pos\VariationLocationDetail');
    }
}
