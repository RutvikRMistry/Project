<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $cash_register_id
 * @property int $transaction_id
 * @property float $amount
 * @property string $pay_method
 * @property string $type
 * @property string $transaction_type
 * @property string $created_at
 * @property string $updated_at
 * @property CashRegister $cashRegister
 * @property Transaction $transaction
 */
class Cash_register_transaction extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['cash_register_id', 'transaction_id', 'amount', 'pay_method', 'type', 'transaction_type', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function cashRegister()
    {
        return $this->belongsTo('App\Models\Pos\CashRegister');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaction()
    {
        return $this->belongsTo('App\Models\Pos\Transaction');
    }
}
