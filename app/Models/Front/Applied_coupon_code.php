<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $reservation_id
 * @property int $coupon_id
 * @property int $user_id
 * @property string $date
 * @property boolean $status
 * @property string $coupon_type
 * @property float $coupon_rate
 * @property string $created_at
 * @property string $updated_at
 * @property CouponMaster $couponMaster
 * @property Reservation $reservation
 * @property User $user
 */
class Applied_coupon_code extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['reservation_id', 'coupon_id', 'user_id', 'date', 'status', 'coupon_type', 'coupon_rate', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function couponMaster()
    {
        return $this->belongsTo('App\Models\Front\CouponMaster', 'coupon_id');
    }

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
    public function user()
    {
        return $this->belongsTo('App\Models\Front\User');
    }
}
