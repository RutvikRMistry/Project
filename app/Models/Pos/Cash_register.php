<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property int $user_id
 * @property string $status
 * @property string $closed_at
 * @property float $closing_amount
 * @property int $total_card_slips
 * @property int $total_cheques
 * @property string $closing_note
 * @property string $created_at
 * @property string $updated_at
 * @property Business $business
 * @property User $user
 * @property CashRegisterTransaction[] $cashRegisterTransactions
 */
class Cash_register extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['business_id', 'user_id', 'status', 'closed_at', 'closing_amount', 'total_card_slips', 'total_cheques', 'closing_note', 'created_at', 'updated_at'];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cashRegisterTransactions()
    {
        return $this->hasMany('App\Models\Pos\CashRegisterTransaction');
    }
}
