<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $department_name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property DesignationMaster[] $designationMasters
 * @property User[] $users
 */
class Department_master extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'department_master';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'department_name', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Banquet\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function designationMasters()
    {
        return $this->hasMany('App\Models\Banquet\DesignationMaster', 'department_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Models\Banquet\User', 'department_id');
    }
}
