<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $event_id
 * @property string $deposit_due
 * @property string $sec_deposit_du
 * @property string $sec_deposit
 * @property string $balance_due
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Eventdetail $eventdetail
 */
class Deposit extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['event_id', 'deposit_due', 'sec_deposit_du', 'sec_deposit', 'balance_due', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function eventdetail()
    {
        return $this->belongsTo('App\Model\Banquet\Eventdetail', 'event_id');
    }
}
