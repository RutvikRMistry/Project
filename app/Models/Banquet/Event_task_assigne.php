<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $event_id
 * @property int $assignes_id
 * @property string $dead_line
 * @property string $priority
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Eventdetail $eventdetail
 */
class Event_task_assigne extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['event_id', 'assignes_id', 'dead_line', 'priority', 'description', 'created_at', 'updated_at', 'deleted_at'];

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
}
