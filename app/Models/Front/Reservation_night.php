<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $reservation_id
 * @property int $room_id
 * @property string $date
 * @property string $check_in
 * @property string $check_out
 * @property float $price
 * @property string $created_at
 * @property string $updated_at
 * @property Reservation $reservation
 * @property Room $room
 */
class Reservation_night extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['reservation_id', 'room_id', 'date', 'check_in', 'check_out', 'price', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reservation()
    {
        return $this->belongsTo('App\Models\Front\Reservation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function room()
    {
        return $this->belongsTo('App\Models\Front\Room');
    }
}
