<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $permission_id
 * @property int $model_id
 * @property string $model_type
 * @property Permission $permission
 */
class Model_has_permission extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['permission_id', 'model_id', 'model_type'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function permission()
    {
        return $this->belongsTo('App\Models\Pos\Permission');
    }
}
