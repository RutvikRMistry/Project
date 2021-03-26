<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $customer_id
 * @property int $qtemplate_id
 * @property int $sales_team_id
 * @property int $user_id
 * @property int $opportunity_id
 * @property string $quotations_number
 * @property string $date
 * @property string $exp_date
 * @property string $payment_term
 * @property int $sales_person_id
 * @property string $terms_and_conditions
 * @property string $status
 * @property float $total
 * @property float $tax_amount
 * @property float $grand_total
 * @property float $discount
 * @property float $final_price
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property int $is_delete_list
 * @property int $is_converted_list
 * @property int $is_quotation_invoice_list
 * @property Customer $customer
 * @property Opportunity $opportunity
 * @property Qtemplate $qtemplate
 * @property SalesTeam $salesTeam
 * @property User $user
 * @property QuotationsProduct[] $quotationsProducts
 * @property SalesOrder[] $salesOrders
 */
class Quotation extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['customer_id', 'qtemplate_id', 'sales_team_id', 'user_id', 'opportunity_id', 'quotations_number', 'date', 'exp_date', 'payment_term', 'sales_person_id', 'terms_and_conditions', 'status', 'total', 'tax_amount', 'grand_total', 'discount', 'final_price', 'created_at', 'updated_at', 'deleted_at', 'is_delete_list', 'is_converted_list', 'is_quotation_invoice_list'];

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
    public function opportunity()
    {
        return $this->belongsTo('App\Model\Banquet\Opportunity');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function qtemplate()
    {
        return $this->belongsTo('App\Model\Banquet\Qtemplate');
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
    public function quotationsProducts()
    {
        return $this->hasMany('App\Model\Banquet\QuotationsProduct');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOrders()
    {
        return $this->hasMany('App\Model\Banquet\SalesOrder');
    }
}
