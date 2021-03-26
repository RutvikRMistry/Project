<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $revisionable_type
 * @property int $revisionable_id
 * @property string $key
 * @property string $old_value
 * @property string $new_value
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Revision extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'revisionable_type', 'revisionable_id', 'key', 'old_value', 'new_value', 'created_at', 'updated_at'];

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
