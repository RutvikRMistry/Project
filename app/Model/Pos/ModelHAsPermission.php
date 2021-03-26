<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $permission_id
 * @property int $model_id
 * @property string $model_type
 * @property Permission $permission
 */
class ModelHAsPermission extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'model_has_permissions';

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
        return $this->belongsTo('App\Model\Pos\Permission');
    }
}
