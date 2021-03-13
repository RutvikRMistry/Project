<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $lead_id
 * @property int $event_id
 * @property int $location_id
 * @property string $occasion
 * @property string $location_rent
 * @property string $date
 * @property string $start_time
 * @property string $end_time
 * @property string $setup
 * @property string $teardown
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property EventLocation $eventLocation
 * @property Eventdetail $eventdetail
 * @property Lead $lead
 */
class Event_time extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['lead_id', 'event_id', 'location_id', 'occasion', 'location_rent', 'date', 'start_time', 'end_time', 'setup', 'teardown', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventLocation()
    {
        return $this->belongsTo('App\Models\Banquet\EventLocation', 'location_id');
    }

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
    public function lead()
    {
        return $this->belongsTo('App\Models\Banquet\Lead');
    }
}
