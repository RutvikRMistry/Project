<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $event_id
 * @property int $photographer_id
 * @property int $day
 * @property string $service_needed
 * @property string $quoted_price
 * @property string $final_price
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Eventdetail $eventdetail
 * @property Photographer $photographer
 */
class Event_photographer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['event_id', 'photographer_id', 'day', 'service_needed', 'quoted_price', 'final_price', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventdetail()
    {
        return $this->belongsTo('App\Models\Banquet\Eventdetail', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photographer()
    {
        return $this->belongsTo('App\Models\Banquet\Photographer');
    }
}
