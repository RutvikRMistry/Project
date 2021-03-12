<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property int $customer_group_id
 * @property string $type
 * @property string $supplier_business_name
 * @property string $name
 * @property string $email
 * @property int $contact_id
 * @property string $tax_number
 * @property string $city
 * @property string $state
 * @property string $country
 * @property string $landmark
 * @property string $mobile
 * @property string $landline
 * @property string $alternate_number
 * @property int $pay_term_number
 * @property string $pay_term_type
 * @property float $credit_limit
 * @property int $created_by
 * @property boolean $is_default
 * @property string $custom_field1
 * @property string $custom_field2
 * @property string $custom_field3
 * @property string $custom_field4
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Business $business
 * @property CustomerGroup $customerGroup
 * @property Booking[] $bookings
 * @property Booking[] $bookings
 * @property Transaction[] $transactions
 */
class Contact extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['business_id', 'customer_group_id', 'type', 'supplier_business_name', 'name', 'email', 'contact_id', 'tax_number', 'city', 'state', 'country', 'landmark', 'mobile', 'landline', 'alternate_number', 'pay_term_number', 'pay_term_type', 'credit_limit', 'created_by', 'is_default', 'custom_field1', 'custom_field2', 'custom_field3', 'custom_field4', 'deleted_at', 'created_at', 'updated_at'];

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
    public function customerGroup()
    {
        return $this->belongsTo('App\Models\Pos\CustomerGroup');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookings()
    {
        return $this->hasMany('App\Models\Pos\Booking', 'location_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookings()
    {
        return $this->hasMany('App\Models\Pos\Booking');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany('App\Models\Pos\Transaction');
    }
}
