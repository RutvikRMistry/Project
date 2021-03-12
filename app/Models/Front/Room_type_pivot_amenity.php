<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $room_type_id
 * @property int $amenity_id
 * @property string $created_at
 * @property string $updated_at
 * @property Amenity $amenity
 * @property RoomType $roomType
 */
class Room_type_pivot_amenity extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'room_type_pivot_amenity';

    /**
     * @var array
     */
    protected $fillable = ['room_type_id', 'amenity_id', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function amenity()
    {
        return $this->belongsTo('App\Models\Front\Amenity');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roomType()
    {
        return $this->belongsTo('App\Models\Front\RoomType');
    }
}
