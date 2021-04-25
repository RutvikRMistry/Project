<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $gateway_id
 * @property string $amount
 * @property string $remarks
 * @property string $trx
 * @property string $created_at
 * @property string $updated_at
 * @property Gateway $gateway
 * @property User $user
 */
class Transaction extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'gateway_id', 'amount', 'remarks', 'trx', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function gateway()
    {
        return $this->belongsTo('App\Model\Front\Gateway');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\Front\User');
    }
}
