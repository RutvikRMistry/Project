<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $short_code
 * @property string $description
 * @property string $short_description
 * @property int $higher_capacity
 * @property int $kids_capacity
 * @property float $base_price
 * @property boolean $status
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property CouponPivotIncludeRoomType[] $couponPivotIncludeRoomTypes
 * @property RegularPrice[] $regularPrices
 * @property Reservation $reservation
 * @property RoomTypeImage[] $roomTypeImages
 * @property RoomTypePivotAmenity[] $roomTypePivotAmenities
 * @property Room[] $rooms
 * @property SpecialPrice[] $specialPrices
 */
class RoomType extends Model
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
    protected $fillable = ['title', 'slug', 'short_code', 'description', 'short_description', 'higher_capacity', 'kids_capacity', 'base_price', 'status', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function couponPivotIncludeRoomTypes()
    {
        return $this->hasMany('App\Model\Frontdesk\CouponPivotIncludeRoomType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regularPrices()
    {
        return $this->hasMany('App\Model\Frontdesk\RegularPrice');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reservation()
    {
        return $this->hasOne('App\Model\Frontdesk\Reservation', 'room_type_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomTypeImages()
    {
        return $this->hasMany('App\Model\Frontdesk\RoomTypeImage');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roomTypePivotAmenities()
    {
        return $this->hasMany('App\Model\Frontdesk\RoomTypePivotAmenity');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rooms()
    {
        return $this->hasMany('App\Model\Frontdesk\Room');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function specialPrices()
    {
        return $this->hasMany('App\Model\Frontdesk\SpecialPrice');
    }
}
