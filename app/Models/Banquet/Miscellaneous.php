<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string $price
 * @property string $miscellaneous_contract_terms
 * @property string $miscellaneous_payment
 * @property string $miscellaneous_arrangements
 * @property string $miscellaneous_cancellation
 * @property string $reschedule
 * @property string $force_majeure
 * @property string $indemnification
 * @property string $material_guarantee
 * @property string $binding_arbitration
 * @property string $approval
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 */
class Miscellaneous extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'miscellaneous';

    /**
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'address', 'email', 'phone', 'price', 'miscellaneous_contract_terms', 'miscellaneous_payment', 'miscellaneous_arrangements', 'miscellaneous_cancellation', 'reschedule', 'force_majeure', 'indemnification', 'material_guarantee', 'binding_arbitration', 'approval', 'created_at', 'updated_at', 'deleted_at'];

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
