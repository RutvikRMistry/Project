<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $cash_register_id
 * @property integer $transaction_id
 * @property float $amount
 * @property string $pay_method
 * @property string $type
 * @property string $transaction_type
 * @property string $created_at
 * @property string $updated_at
 * @property CashRegister $cashRegister
 * @property Transaction $transaction
 */
class CashRegisterTransaction extends Model
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
        return $this->belongsTo('App\Model\Pos\CashRegister');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transaction()
    {
        return $this->belongsTo('App\Model\Pos\Transaction');
    }
}
