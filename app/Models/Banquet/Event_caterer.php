<?php

namespace App\Models\Banquet;

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
 * @property string $caterer_contract_terms
 * @property string $caterer_payment
 * @property string $caterer_staff_charge
 * @property string $caterer_guest_number
 * @property string $caterer_additional_meal
 * @property string $dietary_requirements
 * @property string $additional_beverages
 * @property string $food_and_beverages
 * @property string $cancellation
 * @property string $hire_equipment
 * @property string $waste_disposal
 * @property string $responsibility_for_damage
 * @property string $disorderly_conduct
 * @property string $responsible_service_of_alcohol
 * @property string $safety_and_hygiene
 * @property string $reschedule
 * @property string $force_majeure
 * @property string $indemnification
 * @property string $binding_arbitration
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 */
class Event_caterer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'name', 'service_provided', 'price', 'address', 'email', 'phone', 'caterer_contract_terms', 'caterer_payment', 'caterer_staff_charge', 'caterer_guest_number', 'caterer_additional_meal', 'dietary_requirements', 'additional_beverages', 'food_and_beverages', 'cancellation', 'hire_equipment', 'waste_disposal', 'responsibility_for_damage', 'disorderly_conduct', 'responsible_service_of_alcohol', 'safety_and_hygiene', 'reschedule', 'force_majeure', 'indemnification', 'binding_arbitration', 'created_at', 'updated_at', 'deleted_at'];

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
