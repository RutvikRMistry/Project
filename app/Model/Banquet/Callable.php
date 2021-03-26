<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $call_id
 * @property int $user_id
 * @property int $callable_id
 * @property string $callable_type
 * @property Call $call
 * @property User $user
 */
class Callable extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['call_id', 'user_id', 'callable_id', 'callable_type'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function call()
    {
        return $this->belongsTo('App\Model\Banquet\Call');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\Banquet\User');
    }
}
