<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $event_id
 * @property string $dis_with
 * @property string $subject
 * @property string $description
 * @property string $recipients
 * @property string $media
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Eventdetail $eventdetail
 */
class Discussion extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'discussion';

    /**
     * @var array
     */
    protected $fillable = ['event_id', 'dis_with', 'subject', 'description', 'recipients', 'media', 'created_at', 'updated_at', 'deleted_at'];

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
