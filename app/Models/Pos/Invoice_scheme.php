<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property string $name
 * @property string $scheme_type
 * @property string $prefix
 * @property int $start_number
 * @property int $invoice_count
 * @property int $total_digits
 * @property boolean $is_default
 * @property string $created_at
 * @property string $updated_at
 * @property Business $business
 * @property BusinessLocation[] $businessLocations
 */
class Invoice_scheme extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['business_id', 'name', 'scheme_type', 'prefix', 'start_number', 'invoice_count', 'total_digits', 'is_default', 'created_at', 'updated_at'];

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
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function businessLocations()
    {
        return $this->hasMany('App\Models\Pos\BusinessLocation');
    }
}
