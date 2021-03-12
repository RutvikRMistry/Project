<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $code
 * @property string $type
 * @property float $rate
 * @property boolean $status
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property ReservationTax[] $reservationTaxes
 */
class Tax_manager extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'code', 'type', 'rate', 'status', 'deleted_at', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservationTaxes()
    {
        return $this->hasMany('App\Models\Front\ReservationTax', 'tax_id');
    }
}
