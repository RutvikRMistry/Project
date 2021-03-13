<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $event_id
 * @property int $transportation_id
 * @property int $day
 * @property int $hotel
 * @property string $room
 * @property string $time_of_departure
 * @property string $arrival_time
 * @property string $van_choice
 * @property string $contact_on_day
 * @property string $contact_phone
 * @property string $staff_choice
 * @property string $function_address
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Eventdetail $eventdetail
 * @property TransportationService $transportationService
 */
class Guest_pickup extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['event_id', 'transportation_id', 'day', 'hotel', 'room', 'time_of_departure', 'arrival_time', 'van_choice', 'contact_on_day', 'contact_phone', 'staff_choice', 'function_address', 'created_at', 'updated_at', 'deleted_at'];

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
    public function transportationService()
    {
        return $this->belongsTo('App\Models\Banquet\TransportationService', 'transportation_id');
    }
}
