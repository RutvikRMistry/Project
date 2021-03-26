<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $reservation_id
 * @property integer $room_id
 * @property string $date
 * @property string $check_in
 * @property string $check_out
 * @property float $price
 * @property string $created_at
 * @property string $updated_at
 * @property Reservation $reservation
 * @property Room $room
 */
class ReservationNight extends Model
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
    protected $fillable = ['reservation_id', 'room_id', 'date', 'check_in', 'check_out', 'price', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reservation()
    {
        return $this->belongsTo('App\Model\Frontdesk\Reservation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function room()
    {
        return $this->belongsTo('App\Model\Frontdesk\Room');
    }
}
