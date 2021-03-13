<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $meeting_subject
 * @property string $attendees
 * @property int $responsible_id
 * @property string $starting_date
 * @property string $ending_date
 * @property boolean $all_day
 * @property string $location
 * @property string $meeting_description
 * @property string $privacy
 * @property string $show_time_as
 * @property string $duration
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $company_attendees
 * @property string $staff_attendees
 * @property string $company_name
 * @property User $user
 * @property Meetable[] $meetables
 */
class Meeting extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'meeting_subject', 'attendees', 'responsible_id', 'starting_date', 'ending_date', 'all_day', 'location', 'meeting_description', 'privacy', 'show_time_as', 'duration', 'created_at', 'updated_at', 'deleted_at', 'company_attendees', 'staff_attendees', 'company_name'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

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
    public function meetables()
    {
        return $this->hasMany('App\Models\Banquet\Meetable');
    }
}
