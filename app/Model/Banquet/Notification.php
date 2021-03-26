<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property boolean $status
 * @property int $type_id
 * @property string $type
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Notification extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'title', 'status', 'type_id', 'type', 'created_at', 'updated_at'];

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
