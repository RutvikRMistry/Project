<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $customer_id
 * @property integer $qtemplate_id
 * @property integer $sales_team_id
 * @property integer $user_id
 * @property integer $quotation_id
 * @property string $sale_number
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
 * @property int $is_invoice_list
 * @property Customer $customer
 * @property Qtemplate $qtemplate
 * @property Quotation $quotation
 * @property SalesTeam $salesTeam
 * @property User $user
 * @property Invoice[] $invoices
 * @property SalesOrderProduct[] $salesOrderProducts
 */
class SalesOrder extends Model
{
    /**
     * The "type" of the auto-incrementing ID.
     * 
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['customer_id', 'qtemplate_id', 'sales_team_id', 'user_id', 'quotation_id', 'sale_number', 'date', 'exp_date', 'payment_term', 'sales_person_id', 'terms_and_conditions', 'status', 'total', 'tax_amount', 'grand_total', 'discount', 'final_price', 'created_at', 'updated_at', 'deleted_at', 'is_delete_list', 'is_invoice_list'];

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
    public function qtemplate()
    {
        return $this->belongsTo('App\Model\Banquet\Qtemplate');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function quotation()
    {
        return $this->belongsTo('App\Model\Banquet\Quotation');
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
    public function invoices()
    {
        return $this->hasMany('App\Model\Banquet\Invoice', 'order_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOrderProducts()
    {
        return $this->hasMany('App\Model\Banquet\SalesOrderProduct', 'order_id');
    }
}
