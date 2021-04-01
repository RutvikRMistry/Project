<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $company_id
 * @property integer $user_id
 * @property string $date
 * @property string $call_summary
 * @property int $duration
 * @property int $resp_staff_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $company_name
 * @property Company $company
 * @property User $user
 * @property Callable[] $callables
 */
class Call extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['company_id', 'user_id', 'date', 'call_summary', 'duration', 'resp_staff_id', 'created_at', 'updated_at', 'deleted_at', 'company_name'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo('App\Model\Banquet\Company');
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
    public function callables()
    {
        return $this->hasMany('App\Model\Banquet\Callable');
    }
}
