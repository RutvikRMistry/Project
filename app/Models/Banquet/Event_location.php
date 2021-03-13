<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $dimension
 * @property string $theater
 * @property string $classroom
 * @property string $banquet
 * @property string $booth
 * @property string $trade
 * @property string $location_rent
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property Bookingdetail[] $bookingdetails
 * @property EventTime[] $eventTimes
 */
class Event_location extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'event_location';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'dimension', 'theater', 'classroom', 'banquet', 'booth', 'trade', 'location_rent', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Banquet\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookingdetails()
    {
        return $this->hasMany('App\Models\Banquet\Bookingdetail', 'location_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventTimes()
    {
        return $this->hasMany('App\Models\Banquet\EventTime', 'location_id');
    }
}
