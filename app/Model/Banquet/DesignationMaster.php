<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $department_id
 * @property integer $user_id
 * @property string $designation_name
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property DepartmentMaster $departmentMaster
 * @property User $user
 * @property User[] $users
 */
class DesignationMaster extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'designation_master';

    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['department_id', 'user_id', 'designation_name', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departmentMaster()
    {
        return $this->belongsTo('App\Model\Banquet\DepartmentMaster', 'department_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\Banquet\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('App\Model\Banquet\User', 'designation_id');
    }
}
