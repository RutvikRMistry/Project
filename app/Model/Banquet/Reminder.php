<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $code
 * @property boolean $completed
 * @property string $completed_at
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Reminder extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'code', 'completed', 'completed_at', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\Banquet\User');
    }
}
