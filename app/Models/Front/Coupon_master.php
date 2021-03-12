<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $offer_title
 * @property string $description
 * @property string $image
 * @property string $period_start_time
 * @property string $period_end_time
 * @property string $code
 * @property string $type
 * @property float $value
 * @property float $min_amount
 * @property float $max_amount
 * @property int $limit_per_user
 * @property int $limit_per_coupon
 * @property boolean $status
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property AppliedCouponCode[] $appliedCouponCodes
 * @property CouponPivotIncludeRoomType[] $couponPivotIncludeRoomTypes
 * @property CouponPivotPaidService[] $couponPivotPaidServices
 */
class Coupon_master extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['offer_title', 'description', 'image', 'period_start_time', 'period_end_time', 'code', 'type', 'value', 'min_amount', 'max_amount', 'limit_per_user', 'limit_per_coupon', 'status', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appliedCouponCodes()
    {
        return $this->hasMany('App\Models\Front\AppliedCouponCode', 'coupon_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function couponPivotIncludeRoomTypes()
    {
        return $this->hasMany('App\Models\Front\CouponPivotIncludeRoomType', 'coupon_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function couponPivotPaidServices()
    {
        return $this->hasMany('App\Models\Front\CouponPivotPaidService', 'coupon_id');
    }
}
