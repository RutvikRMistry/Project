<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $invoice_id
 * @property int $user_id
 * @property int $customer_id
 * @property string $payment_date
 * @property string $payment_method
 * @property float $payment_received
 * @property string $payment_number
 * @property string $paykey
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Customer $customer
 * @property Invoice $invoice
 * @property User $user
 */
class Invoice_receive_payment extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['invoice_id', 'user_id', 'customer_id', 'payment_date', 'payment_method', 'payment_received', 'payment_number', 'paykey', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo('App\Models\Banquet\Customer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function invoice()
    {
        return $this->belongsTo('App\Models\Banquet\Invoice');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Banquet\User');
    }
}
