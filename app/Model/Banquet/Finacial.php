<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $event_id
 * @property string $food_beverage_min
 * @property string $grand_total
 * @property string $rental_fee
 * @property string $amount_due
 * @property string $deposit_amount
 * @property string $price_per_persons
 * @property string $actual_amount
 * @property int $deposit_type
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Eventdetail $eventdetail
 */
class Finacial extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['event_id', 'food_beverage_min', 'grand_total', 'rental_fee', 'amount_due', 'deposit_amount', 'price_per_persons', 'actual_amount', 'deposit_type', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventdetail()
    {
        return $this->belongsTo('App\Model\Banquet\Eventdetail', 'event_id');
    }
}
