<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $transaction_id
 * @property integer $variation_id
 * @property integer $product_id
 * @property float $quantity
 * @property float $unit_price_before_discount
 * @property float $unit_price
 * @property string $line_discount_type
 * @property float $line_discount_amount
 * @property float $unit_price_inc_tax
 * @property float $item_tax
 * @property int $tax_id
 * @property int $lot_no_line_id
 * @property string $sell_line_note
 * @property int $parent_sell_line_id
 * @property string $created_at
 * @property string $updated_at
 * @property Transaction $transaction
 * @property Variation $variation
 */
class TransactionSellLine extends Model
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
    protected $fillable = ['transaction_id', 'variation_id', 'product_id', 'quantity', 'unit_price_before_discount', 'unit_price', 'line_discount_type', 'line_discount_amount', 'unit_price_inc_tax', 'item_tax', 'tax_id', 'lot_no_line_id', 'sell_line_note', 'parent_sell_line_id', 'created_at', 'updated_at'];

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
}
