<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $event_id
 * @property int $supplier_id
 * @property string $supplier_type
 * @property int $amount
 * @property int $payment_method
 * @property string $payment_date
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Eventdetail $eventdetail
 */
class Admin_payment extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['event_id', 'supplier_id', 'supplier_type', 'amount', 'payment_method', 'payment_date', 'created_at', 'updated_at', 'deleted_at'];

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
