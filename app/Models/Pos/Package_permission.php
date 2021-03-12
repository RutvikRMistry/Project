<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $user_id
 * @property int $business_id
 * @property int $id
 * @property int $package_id
 * @property string $start_date
 * @property string $end_date
 * @property string $price
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Business $business
 * @property User $user
 */
class Package_permission extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'business_id', 'id', 'package_id', 'start_date', 'end_date', 'price', 'created_at', 'updated_at', 'deleted_at'];

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Pos\User');
    }
}
