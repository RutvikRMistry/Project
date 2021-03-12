<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $reservation_id
 * @property int $paid_service_id
 * @property string $date
 * @property float $value
 * @property int $qty
 * @property float $price
 * @property string $created_at
 * @property string $updated_at
 * @property PaidService $paidService
 * @property Reservation $reservation
 */
class Reservation_paid_service extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['reservation_id', 'paid_service_id', 'date', 'value', 'qty', 'price', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paidService()
    {
        return $this->belongsTo('App\Models\Front\PaidService');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reservation()
    {
        return $this->belongsTo('App\Models\Front\Reservation');
    }
}
