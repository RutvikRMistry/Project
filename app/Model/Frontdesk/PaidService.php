<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $icon
 * @property string $title
 * @property float $price
 * @property boolean $status
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property CouponPivotPaidService[] $couponPivotPaidServices
 * @property ReservationPaidService[] $reservationPaidServices
 */
class PaidService extends Model
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
    protected $fillable = ['icon', 'title', 'price', 'status', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function couponPivotPaidServices()
    {
        return $this->hasMany('App\Model\Frontdesk\CouponPivotPaidService');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservationPaidServices()
    {
        return $this->hasMany('App\Model\Frontdesk\ReservationPaidService');
    }
}
