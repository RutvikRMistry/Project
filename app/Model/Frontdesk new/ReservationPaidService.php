<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $reservation_id
 * @property integer $paid_service_id
 * @property string $date
 * @property float $value
 * @property integer $qty
 * @property float $price
 * @property string $created_at
 * @property string $updated_at
 * @property PaidService $paidService
 * @property Reservation $reservation
 */
class ReservationPaidService extends Model
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
    protected $fillable = ['reservation_id', 'paid_service_id', 'date', 'value', 'qty', 'price', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function paidService()
    {
        return $this->belongsTo('App\Model\Frontdesk\PaidService');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reservation()
    {
        return $this->belongsTo('App\Model\Frontdesk\Reservation');
    }
}
