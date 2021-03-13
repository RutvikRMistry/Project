<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $booking_id
 * @property int $owner_id
 * @property int $sales_team_id
 * @property int $country_id
 * @property int $state_id
 * @property int $city_id
 * @property int $user_id
 * @property string $name
 * @property string $start_date
 * @property string $end_date
 * @property string $start_time
 * @property string $end_time
 * @property string $rooms
 * @property string $status
 * @property int $leadsources_id
 * @property int $from_lead
 * @property string $created_by
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Bookingdetail $bookingdetail
 * @property City $city
 * @property Country $country
 * @property Owner $owner
 * @property SalesTeam $salesTeam
 * @property State $state
 * @property User $user
 * @property Additionalinfo[] $additionalinfos
 * @property Addtask[] $addtasks
 * @property AdminPayment[] $adminPayments
 * @property Caterer[] $caterers
 * @property Contactus[] $contactuses
 * @property Deposit[] $deposits
 * @property Discussion[] $discussions
 * @property Document[] $documents
 * @property EatingTime[] $eatingTimes
 * @property EventDecorator[] $eventDecorators
 * @property EventEntertainment[] $eventEntertainments
 * @property EventEquipment[] $eventEquipments
 * @property EventMenu[] $eventMenus
 * @property EventMiscellaneou[] $eventMiscellaneouses
 * @property EventPhotographer[] $eventPhotographers
 * @property EventStaff[] $eventStaffs
 * @property EventTaskAssigne[] $eventTaskAssignes
 * @property EventTime[] $eventTimes
 * @property EventValetParking[] $eventValetParkings
 * @property Finacial[] $finacials
 * @property GuestPickup[] $guestPickups
 * @property Kid[] $kids
 * @property Managecontact[] $managecontacts
 * @property Note[] $notes
 * @property Payment[] $payments
 * @property Setuptear[] $setuptears
 */
class Eventdetail extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['booking_id', 'owner_id', 'sales_team_id', 'country_id', 'state_id', 'city_id', 'user_id', 'name', 'start_date', 'end_date', 'start_time', 'end_time', 'rooms', 'status', 'leadsources_id', 'from_lead', 'created_by', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function bookingdetail()
    {
        return $this->belongsTo('App\Models\Banquet\Bookingdetail', 'booking_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo('App\Models\Banquet\City');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo('App\Models\Banquet\Country');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner()
    {
        return $this->belongsTo('App\Models\Banquet\Owner');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salesTeam()
    {
        return $this->belongsTo('App\Models\Banquet\SalesTeam');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo('App\Models\Banquet\State');
    }

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
    public function additionalinfos()
    {
        return $this->hasMany('App\Models\Banquet\Additionalinfo', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function addtasks()
    {
        return $this->hasMany('App\Models\Banquet\Addtask', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function adminPayments()
    {
        return $this->hasMany('App\Models\Banquet\AdminPayment', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function caterers()
    {
        return $this->hasMany('App\Models\Banquet\Caterer', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contactuses()
    {
        return $this->hasMany('App\Models\Banquet\Contactus', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function deposits()
    {
        return $this->hasMany('App\Models\Banquet\Deposit', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function discussions()
    {
        return $this->hasMany('App\Models\Banquet\Discussion', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function documents()
    {
        return $this->hasMany('App\Models\Banquet\Document', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eatingTimes()
    {
        return $this->hasMany('App\Models\Banquet\EatingTime', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventDecorators()
    {
        return $this->hasMany('App\Models\Banquet\EventDecorator', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventEntertainments()
    {
        return $this->hasMany('App\Models\Banquet\EventEntertainment', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventEquipments()
    {
        return $this->hasMany('App\Models\Banquet\EventEquipment', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventMenus()
    {
        return $this->hasMany('App\Models\Banquet\EventMenu', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventMiscellaneouses()
    {
        return $this->hasMany('App\Models\Banquet\EventMiscellaneou', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventPhotographers()
    {
        return $this->hasMany('App\Models\Banquet\EventPhotographer', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventStaffs()
    {
        return $this->hasMany('App\Models\Banquet\EventStaff', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventTaskAssignes()
    {
        return $this->hasMany('App\Models\Banquet\EventTaskAssigne', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventTimes()
    {
        return $this->hasMany('App\Models\Banquet\EventTime', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventValetParkings()
    {
        return $this->hasMany('App\Models\Banquet\EventValetParking', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function finacials()
    {
        return $this->hasMany('App\Models\Banquet\Finacial', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guestPickups()
    {
        return $this->hasMany('App\Models\Banquet\GuestPickup', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function kids()
    {
        return $this->hasMany('App\Models\Banquet\Kid', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function managecontacts()
    {
        return $this->hasMany('App\Models\Banquet\Managecontact', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notes()
    {
        return $this->hasMany('App\Models\Banquet\Note', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany('App\Models\Banquet\Payment', 'event_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function setuptears()
    {
        return $this->hasMany('App\Models\Banquet\Setuptear', 'event_id');
    }
}
