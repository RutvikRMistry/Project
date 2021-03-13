<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $type
 * @property string $ip
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Thorottle extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'throttle';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'type', 'ip', 'created_at', 'updated_at'];

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
}
