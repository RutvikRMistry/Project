<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $room_type_id
 * @property string $title
 * @property string $start_time
 * @property string $end_time
 * @property string $day_1
 * @property float $day_1_amount
 * @property string $day_2
 * @property float $day_2_amount
 * @property string $day_3
 * @property float $day_3_amount
 * @property string $day_4
 * @property float $day_4_amount
 * @property string $day_5
 * @property float $day_5_amount
 * @property string $day_6
 * @property float $day_6_amount
 * @property string $day_7
 * @property float $day_7_amount
 * @property boolean $status
 * @property string $created_at
 * @property string $updated_at
 * @property RoomType $roomType
 */
class Special_price extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['room_type_id', 'title', 'start_time', 'end_time', 'day_1', 'day_1_amount', 'day_2', 'day_2_amount', 'day_3', 'day_3_amount', 'day_4', 'day_4_amount', 'day_5', 'day_5_amount', 'day_6', 'day_6_amount', 'day_7', 'day_7_amount', 'status', 'created_at', 'updated_at'];

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
}
