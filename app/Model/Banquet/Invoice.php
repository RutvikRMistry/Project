<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $order_id
 * @property int $customer_id
 * @property int $sales_team_id
 * @property int $user_id
 * @property int $qtemplate_id
 * @property int $sales_person_id
 * @property string $invoice_number
 * @property string $invoice_date
 * @property string $due_date
 * @property string $payment_term
 * @property string $status
 * @property float $total
 * @property float $tax_amount
 * @property float $grand_total
 * @property float $unpaid_amount
 * @property float $discount
 * @property float $final_price
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property int $is_delete_list
 * @property Customer $customer
 * @property Qtemplate $qtemplate
 * @property SalesOrder $salesOrder
 * @property SalesTeam $salesTeam
 * @property User $user
 * @property InvoiceReceivePayment[] $invoiceReceivePayments
 * @property InvoicesProduct[] $invoicesProducts
 */
class Invoice extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['order_id', 'customer_id', 'sales_team_id', 'user_id', 'qtemplate_id', 'sales_person_id', 'invoice_number', 'invoice_date', 'due_date', 'payment_term', 'status', 'total', 'tax_amount', 'grand_total', 'unpaid_amount', 'discount', 'final_price', 'created_at', 'updated_at', 'deleted_at', 'is_delete_list'];

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
    public function salesOrder()
    {
        return $this->belongsTo('App\Model\Banquet\SalesOrder', 'order_id');
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
    public function invoiceReceivePayments()
    {
        return $this->hasMany('App\Model\Banquet\InvoiceReceivePayment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoicesProducts()
    {
        return $this->hasMany('App\Model\Banquet\InvoicesProduct');
    }
}
