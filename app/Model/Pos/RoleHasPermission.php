<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $permission_id
 * @property integer $role_id
 * @property Permission $permission
 * @property Role $role
 */
class RoleHasPermission extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['permission_id', 'role_id'];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Model\Pos\Role');
    }
}
