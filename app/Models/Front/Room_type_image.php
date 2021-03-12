<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $room_type_id
 * @property string $image
 * @property boolean $featured
 * @property string $created_at
 * @property string $updated_at
 * @property RoomType $roomType
 */
class Room_type_image extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['room_type_id', 'image', 'featured', 'created_at', 'updated_at'];

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
