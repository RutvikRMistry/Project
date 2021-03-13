<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $event_id
 * @property int $type_event_id
 * @property string $expected_guest
 * @property string $guarnteed_guest
 * @property string $manager
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Eventdetail $eventdetail
 * @property TypeEvent $typeEvent
 */
class Contactus extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['event_id', 'type_event_id', 'expected_guest', 'guarnteed_guest', 'manager', 'created_at', 'updated_at', 'deleted_at'];

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
    public function typeEvent()
    {
        return $this->belongsTo('App\Models\Banquet\TypeEvent');
    }
}
