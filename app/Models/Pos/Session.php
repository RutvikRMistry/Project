<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $user_id
 * @property string $id
 * @property string $ip_address
 * @property string $user_agent
 * @property string $payload
 * @property int $last_activity
 * @property User $user
 */
class Session extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'id', 'ip_address', 'user_agent', 'payload', 'last_activity'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Pos\User');
    }
}
