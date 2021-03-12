<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
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
class Paid_service extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['icon', 'title', 'price', 'status', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function couponPivotPaidServices()
    {
        return $this->hasMany('App\Models\Front\CouponPivotPaidService');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservationPaidServices()
    {
        return $this->hasMany('App\Models\Front\ReservationPaidService');
    }
}
