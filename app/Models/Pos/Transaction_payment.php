<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $transaction_id
 * @property boolean $is_return
 * @property float $amount
 * @property string $method
 * @property string $transaction_no
 * @property string $card_transaction_number
 * @property string $card_number
 * @property string $card_type
 * @property string $card_holder_name
 * @property string $card_month
 * @property string $card_year
 * @property string $card_security
 * @property string $cheque_number
 * @property string $bank_account_number
 * @property string $paid_on
 * @property int $created_by
 * @property int $payment_for
 * @property int $parent_id
 * @property string $note
 * @property string $payment_ref_no
 * @property string $created_at
 * @property string $updated_at
 * @property Transaction $transaction
 */
class Transaction_payment extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['transaction_id', 'is_return', 'amount', 'method', 'transaction_no', 'card_transaction_number', 'card_number', 'card_type', 'card_holder_name', 'card_month', 'card_year', 'card_security', 'cheque_number', 'bank_account_number', 'paid_on', 'created_by', 'payment_for', 'parent_id', 'note', 'payment_ref_no', 'created_at', 'updated_at'];

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
}
