<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $user_id
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
class SalesTeam extends Model
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
    protected $fillable = ['user_id', 'salesteam', 'team_leader', 'invoice_target', 'invoice_forecast', 'team_members', 'commision', 'leads', 'quotations', 'opportunities', 'notes', 'created_at', 'updated_at', 'deleted_at'];

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
    public function bookingdetails()
    {
        return $this->hasMany('App\Model\Banquet\Bookingdetail');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function companies()
    {
        return $this->hasMany('App\Model\Banquet\Company');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers()
    {
        return $this->hasMany('App\Model\Banquet\Customer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventdetails()
    {
        return $this->hasMany('App\Model\Banquet\Eventdetail');
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
    public function leads()
    {
        return $this->hasMany('App\Model\Banquet\Lead');
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
