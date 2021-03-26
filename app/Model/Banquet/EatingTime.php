<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $event_id
 * @property int $day
 * @property string $service_time
 * @property string $canapes
 * @property string $morning_tea_time
 * @property string $morning_snacks_time
 * @property string $lunch_time
 * @property string $evening_tea_time
 * @property string $evening_snacks_time
 * @property string $dinner_time
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Eventdetail $eventdetail
 */
class EatingTime extends Model
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
    protected $fillable = ['event_id', 'day', 'service_time', 'canapes', 'morning_tea_time', 'morning_snacks_time', 'lunch_time', 'evening_tea_time', 'evening_snacks_time', 'dinner_time', 'created_at', 'updated_at', 'deleted_at'];

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
}
