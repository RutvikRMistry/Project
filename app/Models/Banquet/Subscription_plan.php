<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property int $plan_id
 * @property string $best_for
 * @property float $cost
 * @property float $transaction_fee
 * @property float $marketplace_commission
 * @property int $event_per_month
 * @property int $team_size
 * @property boolean $active
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 */
class Subscription_plan extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'plan_id', 'best_for', 'cost', 'transaction_fee', 'marketplace_commission', 'event_per_month', 'team_size', 'active', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

}
