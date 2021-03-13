<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $slug
 * @property string $name
 * @property string $permissions
 * @property string $created_at
 * @property string $updated_at
 * @property RoleUser[] $roleUsers
 */
class Role extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['slug', 'name', 'permissions', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roleUsers()
    {
        return $this->hasMany('App\Models\Banquet\RoleUser');
    }
}
