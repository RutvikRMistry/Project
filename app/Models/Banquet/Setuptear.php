<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $event_id
 * @property string $setup
 * @property string $teardown
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Eventdetail $eventdetail
 */
class Setuptear extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['event_id', 'setup', 'teardown', 'created_at', 'updated_at', 'deleted_at'];

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
