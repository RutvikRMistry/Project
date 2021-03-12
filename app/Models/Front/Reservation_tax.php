<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $reservation_id
 * @property int $tax_id
 * @property string $type
 * @property float $value
 * @property float $price
 * @property string $created_at
 * @property string $updated_at
 * @property Reservation $reservation
 * @property TaxManager $taxManager
 */
class Reservation_tax extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['reservation_id', 'tax_id', 'type', 'value', 'price', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reservation()
    {
        return $this->belongsTo('App\Models\Front\Reservation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function taxManager()
    {
        return $this->belongsTo('App\Models\Front\TaxManager', 'tax_id');
    }
}
