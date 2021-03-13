<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $hotel_id
 * @property int $user_id
 * @property string $room_name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Hotel $hotel
 * @property User $user
 */
class Event_room extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['hotel_id', 'user_id', 'room_name', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hotel()
    {
        return $this->belongsTo('App\Models\Banquet\Hotel');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Banquet\User');
    }
}
