<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $customer_id
 * @property int $sales_team_id
 * @property int $user_id
 * @property string $opportunity
 * @property string $stages
 * @property float $expected_revenue
 * @property string $probability
 * @property string $email
 * @property integer $phone
 * @property int $sales_person_id
 * @property string $next_action
 * @property string $next_action_title
 * @property string $expected_closing
 * @property string $priority
 * @property string $tags
 * @property string $lost_reason
 * @property string $internal_notes
 * @property int $assigned_partner_id
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property string $product_name
 * @property string $team_name
 * @property string $staff
 * @property string $additional_info
 * @property string $mobile
 * @property string $salesteam
 * @property string $company_name
 * @property int $is_archived
 * @property int $is_delete_list
 * @property int $is_converted_list
 * @property Customer $customer
 * @property SalesTeam $salesTeam
 * @property User $user
 * @property Quotation[] $quotations
 */
class Opportunity extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['customer_id', 'sales_team_id', 'user_id', 'opportunity', 'stages', 'expected_revenue', 'probability', 'email', 'phone', 'sales_person_id', 'next_action', 'next_action_title', 'expected_closing', 'priority', 'tags', 'lost_reason', 'internal_notes', 'assigned_partner_id', 'created_at', 'updated_at', 'deleted_at', 'product_name', 'team_name', 'staff', 'additional_info', 'mobile', 'salesteam', 'company_name', 'is_archived', 'is_delete_list', 'is_converted_list'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer()
    {
        return $this->belongsTo('App\Model\Banquet\Customer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salesTeam()
    {
        return $this->belongsTo('App\Model\Banquet\SalesTeam');
    }

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
    public function quotations()
    {
        return $this->hasMany('App\Model\Banquet\Quotation');
    }
}
