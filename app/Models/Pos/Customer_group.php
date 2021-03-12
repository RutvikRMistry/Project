<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property string $name
 * @property float $amount
 * @property int $created_by
 * @property string $created_at
 * @property string $updated_at
 * @property Business $business
 * @property Contact[] $contacts
 * @property Transaction[] $transactions
 */
class Customer_group extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['business_id', 'name', 'amount', 'created_by', 'created_at', 'updated_at'];

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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contacts()
    {
        return $this->hasMany('App\Models\Pos\Contact');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany('App\Models\Pos\Transaction');
    }
}
