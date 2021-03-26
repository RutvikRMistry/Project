<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $contact_id
 * @property int $business_id
 * @property int $location_id
 * @property int $waiter_id
 * @property int $table_id
 * @property int $correspondent_id
 * @property string $booking_start
 * @property string $booking_end
 * @property int $created_by
 * @property string $booking_status
 * @property string $booking_note
 * @property string $created_at
 * @property string $updated_at
 * @property Business $business
 * @property Contact $contact
 * @property Contact $contact
 */
class Booking extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['contact_id', 'business_id', 'location_id', 'waiter_id', 'table_id', 'correspondent_id', 'booking_start', 'booking_end', 'created_by', 'booking_status', 'booking_note', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function business()
    {
        return $this->belongsTo('App\Model\Pos\Business');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contact()
    {
        return $this->belongsTo('App\Model\Pos\Contact', 'location_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    // public function contact()
    // {
    //     return $this->belongsTo('App\Model\Pos\Contact');
    // }
}
