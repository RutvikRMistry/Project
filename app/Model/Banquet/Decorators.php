<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $service_provided
 * @property int $price
 * @property string $address
 * @property string $email
 * @property string $phone
 * @property string $decoration_contract_terms
 * @property string $decoration_fees
 * @property string $decoration_arrangements
 * @property string $damage_to_property
 * @property string $deposit
 * @property string $cancellation_and_design_change_fee
 * @property string $safety
 * @property string $material_guarantee
 * @property string $making_changes
 * @property string $approval
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property EventDecorator[] $eventDecorators
 */
class Decorators extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'service_provided', 'price', 'address', 'email', 'phone', 'decoration_contract_terms', 'decoration_fees', 'decoration_arrangements', 'damage_to_property', 'deposit', 'cancellation_and_design_change_fee', 'safety', 'material_guarantee', 'making_changes', 'approval', 'created_at', 'updated_at', 'deleted_at'];

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
    public function eventDecorators()
    {
        return $this->hasMany('App\Model\Banquet\EventDecorator');
    }
}
