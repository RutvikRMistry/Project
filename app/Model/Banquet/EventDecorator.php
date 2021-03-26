<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $event_id
 * @property integer $decorator_id
 * @property int $day
 * @property string $service_needed
 * @property string $quoted_price
 * @property string $final_price
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Decorator $decorator
 * @property Eventdetail $eventdetail
 */
class EventDecorator extends Model
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
    protected $fillable = ['event_id', 'decorator_id', 'day', 'service_needed', 'quoted_price', 'final_price', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function decorator()
    {
        return $this->belongsTo('App\Model\Banquet\Decorator');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventdetail()
    {
        return $this->belongsTo('App\Model\Banquet\Eventdetail', 'event_id');
    }
}