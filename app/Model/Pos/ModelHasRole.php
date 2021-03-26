<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $role_id
 * @property integer $model_id
 * @property string $model_type
 * @property Role $role
 */
class ModelHasRole extends Model
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
        return $this->belongsTo('App\Model\Pos\Role');
    }
}
