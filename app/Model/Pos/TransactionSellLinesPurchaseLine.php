<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $stock_adjustment_line_id
 * @property integer $purchase_line_id
 * @property int $sell_line_id
 * @property float $quantity
 * @property string $created_at
 * @property string $updated_at
 * @property PurchaseLine $purchaseLine
 * @property StockAdjustmentLine $stockAdjustmentLine
 */
class TransactionSellLinesPurchaseLine extends Model
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
    protected $fillable = ['stock_adjustment_line_id', 'purchase_line_id', 'sell_line_id', 'quantity', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function purchaseLine()
    {
        return $this->belongsTo('App\Model\Pos\PurchaseLine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stockAdjustmentLine()
    {
        return $this->belongsTo('App\Model\Pos\StockAdjustmentLine');
    }
}
