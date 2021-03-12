<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $stock_adjustment_line_id
 * @property int $purchase_line_id
 * @property int $sell_line_id
 * @property float $quantity
 * @property string $created_at
 * @property string $updated_at
 * @property PurchaseLine $purchaseLine
 * @property StockAdjustmentLine $stockAdjustmentLine
 */
class Transaction_sell_lines_purchase_line extends Model
{
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
        return $this->belongsTo('App\Models\Pos\PurchaseLine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function stockAdjustmentLine()
    {
        return $this->belongsTo('App\Models\Pos\StockAdjustmentLine');
    }
}
