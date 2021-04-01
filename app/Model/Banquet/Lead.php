<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $country_id
 * @property int $state_id
 * @property int $city_id
 * @property int $sales_team_id
 * @property int $user_id
 * @property string $company_name
 * @property int $sales_person_id
 * @property string $email
 * @property string $event_type
 * @property string $mobile
 * @property string $priority
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $client_name
 * @property string $additionl_info
 * @property string $location
 * @property string $start_date
 * @property string $end_date
 * @property string $budget
 * @property int $expected_guests_veg
 * @property int $expected_guests_non_veg
 * @property string $event_name
 * @property int $lead_source
 * @property int $event_manager
 * @property City $city
 * @property Country $country
 * @property SalesTeam $salesTeam
 * @property State $state
 * @property User $user
 * @property EventTime[] $eventTimes
 */
class Lead extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['country_id', 'state_id', 'city_id', 'sales_team_id', 'user_id', 'company_name', 'sales_person_id', 'email', 'event_type', 'mobile', 'priority', 'created_at', 'updated_at', 'deleted_at', 'client_name', 'additionl_info', 'location', 'start_date', 'end_date', 'budget', 'expected_guests_veg', 'expected_guests_non_veg', 'event_name', 'lead_source', 'event_manager'];

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
    public function eventTimes()
    {
        return $this->hasMany('App\Model\Banquet\EventTime');
    }
}
