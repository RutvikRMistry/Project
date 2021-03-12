<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property string $name
 * @property string $guard_name
 * @property boolean $is_default
 * @property boolean $is_service_staff
 * @property string $created_at
 * @property string $updated_at
 * @property Business $business
 * @property ModelHasRole[] $modelHasRoles
 * @property Permission[] $permissions
 */
class Role extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['business_id', 'name', 'guard_name', 'is_default', 'is_service_staff', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function business()
    {
        return $this->belongsTo('App\Models\Pos\Business');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function modelHasRoles()
    {
        return $this->hasMany('App\Models\Pos\ModelHasRole');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {
        return $this->belongsToMany('App\Models\Pos\Permission', 'role_has_permissions');
    }
}
