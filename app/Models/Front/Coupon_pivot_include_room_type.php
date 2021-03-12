<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $coupon_id
 * @property int $room_type_id
 * @property string $created_at
 * @property string $updated_at
 * @property CouponMaster $couponMaster
 * @property RoomType $roomType
 */
class Coupon_pivot_include_room_type extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'coupon_pivot_include_room_type';

    /**
     * @var array
     */
    protected $fillable = ['coupon_id', 'room_type_id', 'created_at', 'updated_at'];

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
    public function roomType()
    {
        return $this->belongsTo('App\Models\Front\RoomType');
    }
}
