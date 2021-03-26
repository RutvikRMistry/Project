<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $location_id
 * @property int $user_id
 * @property int $country_id
 * @property int $state_id
 * @property int $city_id
 * @property int $sales_team_id
 * @property string $booking_name
 * @property string $client_email
 * @property string $client_phone
 * @property string $client_company
 * @property string $from_date
 * @property string $to_date
 * @property int $sales_person_id
 * @property string $event_type
 * @property string $event_status
 * @property string $event_name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property int $lead_source
 * @property int $event_manager
 * @property int $expected_guests_veg
 * @property int $expected_guests_non_veg
 * @property int $guaranteed_guests_veg
 * @property int $guaranteed_guests_non_veg
 * @property int $from_lead
 * @property City $city
 * @property Country $country
 * @property EventLocation $eventLocation
 * @property SalesTeam $salesTeam
 * @property State $state
 * @property User $user
 * @property Eventdetail[] $eventdetails
 */
class Bookingdetail extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['location_id', 'user_id', 'country_id', 'state_id', 'city_id', 'sales_team_id', 'booking_name', 'client_email', 'client_phone', 'client_company', 'from_date', 'to_date', 'sales_person_id', 'event_type', 'event_status', 'event_name', 'created_at', 'updated_at', 'deleted_at', 'lead_source', 'event_manager', 'expected_guests_veg', 'expected_guests_non_veg', 'guaranteed_guests_veg', 'guaranteed_guests_non_veg', 'from_lead'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo('App\Model\Banquet\City');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo('App\Model\Banquet\Country');
    }

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
    public function salesTeam()
    {
        return $this->belongsTo('App\Model\Banquet\SalesTeam');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo('App\Model\Banquet\State');
    }

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
    public function eventdetails()
    {
        return $this->hasMany('App\Model\Banquet\Eventdetail', 'booking_id');
    }
}
