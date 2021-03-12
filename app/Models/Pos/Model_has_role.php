<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $role_id
 * @property int $model_id
 * @property string $model_type
 * @property Role $role
 */
class Model_has_role extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['role_id', 'model_id', 'model_type'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Models\Pos\Role');
    }
}
