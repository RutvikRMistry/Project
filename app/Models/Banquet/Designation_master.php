<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $department_id
 * @property int $user_id
 * @property string $designation_name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property DepartmentMaster $departmentMaster
 * @property User $user
 * @property User[] $users
 */
class Designation_master extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'designation_master';

    /**
     * @var array
     */
    protected $fillable = ['department_id', 'user_id', 'designation_name', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departmentMaster()
    {
        return $this->belongsTo('App\Models\Banquet\DepartmentMaster', 'department_id');
    }

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
    public function users()
    {
        return $this->hasMany('App\Models\Banquet\User', 'designation_id');
    }
}
