<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $task_from_user
 * @property boolean $finished
 * @property string $task_description
 * @property string $task_deadline
 * @property string $created_at
 * @property string $updated_at
 * @property int $task_to_user
 * @property User $user
 */
class Task extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'task_from_user', 'finished', 'task_description', 'task_deadline', 'created_at', 'updated_at', 'task_to_user'];

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
