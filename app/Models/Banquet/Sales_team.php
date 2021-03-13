<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $salesteam
 * @property int $team_leader
 * @property float $invoice_target
 * @property float $invoice_forecast
 * @property string $team_members
 * @property string $commision
 * @property boolean $leads
 * @property boolean $quotations
 * @property boolean $opportunities
 * @property string $notes
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property User $user
 * @property Bookingdetail[] $bookingdetails
 * @property Company[] $companies
 * @property Customer[] $customers
 * @property Eventdetail[] $eventdetails
 * @property Invoice[] $invoices
 * @property Lead[] $leads
 * @property Opportunity[] $opportunities
 * @property Quotation[] $quotations
 * @property SalesOrder[] $salesOrders
 */
class Sales_team extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'salesteam', 'team_leader', 'invoice_target', 'invoice_forecast', 'team_members', 'commision', 'leads', 'quotations', 'opportunities', 'notes', 'created_at', 'updated_at', 'deleted_at'];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookingdetails()
    {
        return $this->hasMany('App\Models\Banquet\Bookingdetail');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function companies()
    {
        return $this->hasMany('App\Models\Banquet\Company');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers()
    {
        return $this->hasMany('App\Models\Banquet\Customer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventdetails()
    {
        return $this->hasMany('App\Models\Banquet\Eventdetail');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany('App\Models\Banquet\Invoice');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leads()
    {
        return $this->hasMany('App\Models\Banquet\Lead');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function opportunities()
    {
        return $this->hasMany('App\Models\Banquet\Opportunity');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotations()
    {
        return $this->hasMany('App\Models\Banquet\Quotation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOrders()
    {
        return $this->hasMany('App\Models\Banquet\SalesOrder');
    }
}
