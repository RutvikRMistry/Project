<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $coupon_id
 * @property integer $room_type_id
 * @property string $created_at
 * @property string $updated_at
 * @property CouponMaster $couponMaster
 * @property RoomType $roomType
 */
class CouponPivotIncludeRoomType extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'coupon_pivot_include_room_type';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['coupon_id', 'room_type_id', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function couponMaster()
    {
        return $this->belongsTo('App\Model\Frontdesk\CouponMaster', 'coupon_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roomType()
    {
        return $this->belongsTo('App\Model\Frontdesk\RoomType');
    }
}
