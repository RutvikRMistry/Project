<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $reservation_id
 * @property integer $tax_id
 * @property string $type
 * @property float $value
 * @property float $price
 * @property string $created_at
 * @property string $updated_at
 * @property Reservation $reservation
 * @property TaxManager $taxManager
 */
class ReservationTax extends Model
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
    protected $fillable = ['reservation_id', 'tax_id', 'type', 'value', 'price', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function reservation()
    {
        return $this->belongsTo('App\Model\Frontdesk\Reservation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function taxManager()
    {
        return $this->belongsTo('App\Model\Frontdesk\TaxManager', 'tax_id');
    }
}
