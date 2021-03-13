<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $event_id
 * @property string $amount
 * @property string $due_date
 * @property string $customer_facing_title
 * @property string $internal_note
 * @property string $status
 * @property int $payment_method
 * @property string $card_no
 * @property string $holder_name
 * @property string $month_year
 * @property string $cheque_no
 * @property string $gift_card_no
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Eventdetail $eventdetail
 */
class Payment extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['event_id', 'amount', 'due_date', 'customer_facing_title', 'internal_note', 'status', 'payment_method', 'card_no', 'holder_name', 'month_year', 'cheque_no', 'gift_card_no', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventdetail()
    {
        return $this->belongsTo('App\Models\Banquet\Eventdetail', 'event_id');
    }
}
