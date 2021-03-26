<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $type
 * @property int $capacity
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property EventValetParking[] $eventValetParkings
 */
class Parking extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'parking';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'type', 'capacity', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\Banquet\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventValetParkings()
    {
        return $this->hasMany('App\Model\Banquet\EventValetParking');
    }
}
