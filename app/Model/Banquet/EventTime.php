<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $lead_id
 * @property integer $event_id
 * @property integer $location_id
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
class EventTime extends Model
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
    protected $fillable = ['lead_id', 'event_id', 'location_id', 'occasion', 'location_rent', 'date', 'start_time', 'end_time', 'setup', 'teardown', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventLocation()
    {
        return $this->belongsTo('App\Model\Banquet\EventLocation', 'location_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventdetail()
    {
        return $this->belongsTo('App\Model\Banquet\Eventdetail', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lead()
    {
        return $this->belongsTo('App\Model\Banquet\Lead');
    }
}
