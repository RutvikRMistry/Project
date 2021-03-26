<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $event_id
 * @property integer $assignes_id
 * @property string $dead_line
 * @property string $priority
 * @property string $description
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Eventdetail $eventdetail
 */
class EvenTaskAssign extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'event_task_assignes';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['event_id', 'assignes_id', 'dead_line', 'priority', 'description', 'created_at', 'updated_at', 'deleted_at'];

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
