<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $coupon_id
 * @property int $paid_service_id
 * @property string $created_at
 * @property string $updated_at
 * @property CouponMaster $couponMaster
 * @property PaidService $paidService
 */
class Coupon_pivot_paid_service extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'coupon_pivot_paid_service';

    /**
     * @var array
     */
    protected $fillable = ['coupon_id', 'paid_service_id', 'created_at', 'updated_at'];

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
    public function paidService()
    {
        return $this->belongsTo('App\Models\Front\PaidService');
    }
}
