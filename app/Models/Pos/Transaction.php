<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property int $res_table_id
 * @property int $contact_id
 * @property int $customer_group_id
 * @property int $location_id
 * @property int $res_waiter_id
 * @property string $res_order_status
 * @property string $type
 * @property string $status
 * @property boolean $is_quotation
 * @property string $payment_status
 * @property string $adjustment_type
 * @property string $invoice_no
 * @property string $ref_no
 * @property string $transaction_date
 * @property float $total_before_tax
 * @property int $tax_id
 * @property float $tax_amount
 * @property string $discount_type
 * @property string $discount_amount
 * @property string $shipping_details
 * @property float $shipping_charges
 * @property string $additional_notes
 * @property string $staff_note
 * @property float $final_total
 * @property int $expense_category_id
 * @property int $expense_for
 * @property int $commission_agent
 * @property string $document
 * @property boolean $is_direct_sale
 * @property float $exchange_rate
 * @property float $total_amount_recovered
 * @property int $transfer_parent_id
 * @property int $opening_stock_product_id
 * @property int $created_by
 * @property string $created_at
 * @property string $updated_at
 * @property Business $business
 * @property Contact $contact
 * @property CustomerGroup $customerGroup
 * @property ResTable $resTable
 * @property CashRegisterTransaction[] $cashRegisterTransactions
 * @property PurchaseLine[] $purchaseLines
 * @property StockAdjustmentLine[] $stockAdjustmentLines
 * @property TransactionPayment[] $transactionPayments
 * @property TransactionSellLine[] $transactionSellLines
 */
class Transaction extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['business_id', 'res_table_id', 'contact_id', 'customer_group_id', 'location_id', 'res_waiter_id', 'res_order_status', 'type', 'status', 'is_quotation', 'payment_status', 'adjustment_type', 'invoice_no', 'ref_no', 'transaction_date', 'total_before_tax', 'tax_id', 'tax_amount', 'discount_type', 'discount_amount', 'shipping_details', 'shipping_charges', 'additional_notes', 'staff_note', 'final_total', 'expense_category_id', 'expense_for', 'commission_agent', 'document', 'is_direct_sale', 'exchange_rate', 'total_amount_recovered', 'transfer_parent_id', 'opening_stock_product_id', 'created_by', 'created_at', 'updated_at'];

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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function contact()
    {
        return $this->belongsTo('App\Models\Pos\Contact');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customerGroup()
    {
        return $this->belongsTo('App\Models\Pos\CustomerGroup');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function resTable()
    {
        return $this->belongsTo('App\Models\Pos\ResTable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cashRegisterTransactions()
    {
        return $this->hasMany('App\Models\Pos\CashRegisterTransaction');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function purchaseLines()
    {
        return $this->hasMany('App\Models\Pos\PurchaseLine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function stockAdjustmentLines()
    {
        return $this->hasMany('App\Models\Pos\StockAdjustmentLine');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactionPayments()
    {
        return $this->hasMany('App\Models\Pos\TransactionPayment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactionSellLines()
    {
        return $this->hasMany('App\Models\Pos\TransactionSellLine');
    }
}
