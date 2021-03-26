<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property int $price
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string $contract_terms
 * @property string $payment
 * @property string $cancellation
 * @property string $force_majeure
 * @property string $safety_and_security
 * @property string $indemnification
 * @property string $binding_arbitration
 * @property string $approval
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property EventEntertainment[] $eventEntertainments
 */
class Entertainment extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'entertainment';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'price', 'address', 'email', 'phone', 'contract_terms', 'payment', 'cancellation', 'force_majeure', 'safety_and_security', 'indemnification', 'binding_arbitration', 'approval', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

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
    public function eventEntertainments()
    {
        return $this->hasMany('App\Model\Banquet\EventEntertainment');
    }
}
