<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $transaction_id
 * @property int $variation_id
 * @property int $product_id
 * @property float $quantity
 * @property float $unit_price
 * @property int $removed_purchase_line
 * @property string $created_at
 * @property string $updated_at
 * @property Transaction $transaction
 * @property Variation $variation
 * @property TransactionSellLinesPurchaseLine[] $transactionSellLinesPurchaseLines
 */
class Stock_adjustment_line extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['transaction_id', 'variation_id', 'product_id', 'quantity', 'unit_price', 'removed_purchase_line', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaction()
    {
        return $this->belongsTo('App\Models\Pos\Transaction');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function variation()
    {
        return $this->belongsTo('App\Models\Pos\Variation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactionSellLinesPurchaseLines()
    {
        return $this->hasMany('App\Models\Pos\TransactionSellLinesPurchaseLine');
    }
}
