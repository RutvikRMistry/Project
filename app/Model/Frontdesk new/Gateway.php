<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $main_name
 * @property string $name
 * @property float $minamo
 * @property float $maxamo
 * @property float $fixed_charge
 * @property float $percent_charge
 * @property float $rate
 * @property string $val1
 * @property string $val2
 * @property string $val3
 * @property string $val4
 * @property string $val5
 * @property string $val6
 * @property string $val7
 * @property boolean $status
 * @property boolean $is_online
 * @property boolean $is_offline
 * @property string $created_at
 * @property string $updated_at
 * @property Payment[] $payments
 * @property Transaction $transaction
 */
class Gateway extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['main_name', 'name', 'minamo', 'maxamo', 'fixed_charge', 'percent_charge', 'rate', 'val1', 'val2', 'val3', 'val4', 'val5', 'val6', 'val7', 'status', 'is_online', 'is_offline', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany('App\Model\Front\Payment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function transaction()
    {
        return $this->hasOne('App\Model\Front\Transaction', 'gateway_id');
    }
}
