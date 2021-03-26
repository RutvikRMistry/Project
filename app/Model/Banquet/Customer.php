<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $company_id
 * @property int $sales_team_id
 * @property string $first_name
 * @property string $last_name
 * @property int $belong_user_id
 * @property string $address
 * @property string $website
 * @property string $job_position
 * @property string $mobile
 * @property string $fax
 * @property string $title
 * @property string $company_avatar
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Company $company
 * @property SalesTeam $salesTeam
 * @property User $user
 * @property InvoiceReceivePayment[] $invoiceReceivePayments
 * @property Invoice[] $invoices
 * @property Opportunity[] $opportunities
 * @property Quotation[] $quotations
 * @property SalesOrder[] $salesOrders
 */
class Customer extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'company_id', 'sales_team_id', 'first_name', 'last_name', 'belong_user_id', 'address', 'website', 'job_position', 'mobile', 'fax', 'title', 'company_avatar', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo('App\Model\Banquet\Company');
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
    public function invoices()
    {
        return $this->hasMany('App\Model\Banquet\Invoice');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function opportunities()
    {
        return $this->hasMany('App\Model\Banquet\Opportunity');
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
