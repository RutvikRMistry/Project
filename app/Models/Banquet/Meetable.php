<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $meeting_id
 * @property int $user_id
 * @property int $meetable_id
 * @property string $meetable_type
 * @property Meeting $meeting
 * @property User $user
 */
class Meetable extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['meeting_id', 'user_id', 'meetable_id', 'meetable_type'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function meeting()
    {
        return $this->belongsTo('App\Models\Banquet\Meeting');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Banquet\User');
    }
}
