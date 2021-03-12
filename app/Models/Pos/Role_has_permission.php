<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $permission_id
 * @property int $role_id
 * @property Permission $permission
 * @property Role $role
 */
class Role_has_permission extends Model
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
        return $this->belongsTo('App\Models\Pos\Permission');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('App\Models\Pos\Role');
    }
}
