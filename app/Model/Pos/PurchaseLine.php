<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $transaction_id
 * @property integer $variation_id
 * @property integer $product_id
 * @property float $quantity
 * @property float $pp_without_discount
 * @property float $discount_percent
 * @property float $purchase_price
 * @property float $purchase_price_inc_tax
 * @property float $item_tax
 * @property int $tax_id
 * @property float $quantity_sold
 * @property float $quantity_adjusted
 * @property string $mfg_date
 * @property string $exp_date
 * @property string $lot_number
 * @property string $created_at
 * @property string $updated_at
 * @property Transaction $transaction
 * @property Variation $variation
 * @property TransactionSellLinesPurchaseLine[] $transactionSellLinesPurchaseLines
 */
class PurchaseLine extends Model
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
    protected $fillable = ['transaction_id', 'variation_id', 'product_id', 'quantity', 'pp_without_discount', 'discount_percent', 'purchase_price', 'purchase_price_inc_tax', 'item_tax', 'tax_id', 'quantity_sold', 'quantity_adjusted', 'mfg_date', 'exp_date', 'lot_number', 'created_at', 'updated_at'];

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
        return $this->belongsTo('App\Model\Pos\Transaction');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function variation()
    {
        return $this->belongsTo('App\Model\Pos\Variation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactionSellLinesPurchaseLines()
    {
        return $this->hasMany('App\Model\Pos\TransactionSellLinesPurchaseLine');
    }
}
