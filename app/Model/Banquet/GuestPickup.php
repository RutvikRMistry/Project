<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $event_id
 * @property integer $transportation_id
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
class GuestPickup extends Model
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
    protected $fillable = ['event_id', 'transportation_id', 'day', 'hotel', 'room', 'time_of_departure', 'arrival_time', 'van_choice', 'contact_on_day', 'contact_phone', 'staff_choice', 'function_address', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

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
    public function transportationService()
    {
        return $this->belongsTo('App\Model\Banquet\TransportationService', 'transportation_id');
    }
}
