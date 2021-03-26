<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $room_type_id
 * @property string $image
 * @property boolean $featured
 * @property string $created_at
 * @property string $updated_at
 * @property RoomType $roomType
 */
class RoomTypeImage extends Model
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
    protected $fillable = ['room_type_id', 'image', 'featured', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roomType()
    {
        return $this->belongsTo('App\Model\Frontdesk\RoomType');
    }
}
