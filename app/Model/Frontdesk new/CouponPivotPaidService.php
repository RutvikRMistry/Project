<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

class CouponPivotPaidService extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'Coupon_pivot_paid_service';

    /**
     * @var array
     */
    protected $fillable = [];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

}
