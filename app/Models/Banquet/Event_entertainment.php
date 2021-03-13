<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $event_id
 * @property int $entertainment_id
 * @property int $day
 * @property string $service_needed
 * @property string $quoted_price
 * @property string $final_price
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Entertainment $entertainment
 * @property Eventdetail $eventdetail
 */
class Event_entertainment extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'event_entertainment';

    /**
     * @var array
     */
    protected $fillable = ['event_id', 'entertainment_id', 'day', 'service_needed', 'quoted_price', 'final_price', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function entertainment()
    {
        return $this->belongsTo('App\Models\Banquet\Entertainment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventdetail()
    {
        return $this->belongsTo('App\Models\Banquet\Eventdetail', 'event_id');
    }
}
