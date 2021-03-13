<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property int $stripe_id
 * @property int $stripe_plan
 * @property int $quantity
 * @property string $trial_ends_at
 * @property string $ends_at
 * @property int $created_at
 * @property int $updated_at
 * @property User $user
 */
class Subscription extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'stripe_id', 'stripe_plan', 'quantity', 'trial_ends_at', 'ends_at', 'created_at', 'updated_at'];

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
}
