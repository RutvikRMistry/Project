<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $room_type_id
 * @property string $uid
 * @property boolean $online
 * @property string $date
 * @property int $adults
 * @property int $kids
 * @property int $extra_bed
 * @property float $extra_bed_charge
 * @property string $check_in
 * @property string $check_out
 * @property int $number_of_room
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 * @property RoomType $roomType
 * @property User $user
 * @property AppliedCouponCode[] $appliedCouponCodes
 * @property Payment[] $payments
 * @property ReservationNight[] $reservationNights
 * @property ReservationPaidService[] $reservationPaidServices
 * @property ReservationTax[] $reservationTaxes
 */
class Reservation extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'room_type_id', 'uid', 'online', 'date', 'adults', 'kids', 'extra_bed', 'extra_bed_charge', 'check_in', 'check_out', 'number_of_room', 'status', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roomType()
    {
        return $this->belongsTo('App\Models\Front\RoomType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Front\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appliedCouponCodes()
    {
        return $this->hasMany('App\Models\Front\AppliedCouponCode');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany('App\Models\Front\Payment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservationNights()
    {
        return $this->hasMany('App\Models\Front\ReservationNight');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservationPaidServices()
    {
        return $this->hasMany('App\Models\Front\ReservationPaidService');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservationTaxes()
    {
        return $this->hasMany('App\Models\Front\ReservationTax');
    }
}
