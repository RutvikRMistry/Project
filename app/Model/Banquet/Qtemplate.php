<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $quotation_template
 * @property int $quotation_duration
 * @property boolean $immediate_payment
 * @property string $terms_and_conditions
 * @property float $total
 * @property float $tax_amount
 * @property float $grand_total
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property Invoice[] $invoices
 * @property QtemplateProduct[] $qtemplateProducts
 * @property Quotation[] $quotations
 * @property SalesOrder[] $salesOrders
 */
class Qtemplate extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'quotation_template', 'quotation_duration', 'immediate_payment', 'terms_and_conditions', 'total', 'tax_amount', 'grand_total', 'created_at', 'updated_at', 'deleted_at'];

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
    public function invoices()
    {
        return $this->hasMany('App\Model\Banquet\Invoice');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function qtemplateProducts()
    {
        return $this->hasMany('App\Model\Banquet\QtemplateProduct');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotations()
    {
        return $this->hasMany('App\Model\Banquet\Quotation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOrders()
    {
        return $this->hasMany('App\Model\Banquet\SalesOrder');
    }
}
