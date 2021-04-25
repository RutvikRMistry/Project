<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $room_type_id
 * @property int $floor_id
 * @property string $image
 * @property int $number
 * @property boolean $status
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Floor $floor
 * @property RoomType $roomType
 * @property ReservationNight[] $reservationNights
 */
class Room extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['room_type_id', 'floor_id', 'image', 'number', 'status', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function floor()
    {
        return $this->belongsTo('App\Model\Front\Floor');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roomType()
    {
        return $this->belongsTo('App\Model\Front\RoomType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservationNights()
    {
        return $this->hasMany('App\Model\Front\ReservationNight');
    }
}
