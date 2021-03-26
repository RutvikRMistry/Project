<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $gateway_id
 * @property int $reservation_id
 * @property float $amount
 * @property float $usd_amo
 * @property string $trx
 * @property boolean $status
 * @property string $type
 * @property boolean $try
 * @property float $btc_amo
 * @property float $btc_wallet
 * @property string $created_at
 * @property string $updated_at
 * @property Gateway $gateway
 * @property Reservation $reservation
 * @property User $user
 */
class Payment extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'gateway_id', 'reservation_id', 'amount', 'usd_amo', 'trx', 'status', 'type', 'try', 'btc_amo', 'btc_wallet', 'created_at', 'updated_at'];

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
        return $this->belongsTo('App\Models\Front\Gateway');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reservation()
    {
        return $this->belongsTo('App\Models\Front\Reservation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Front\User');
    }
}
