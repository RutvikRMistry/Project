<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $product_variation_id
 * @property int $variation_id
 * @property int $product_id
 * @property int $location_id
 * @property float $qty_available
 * @property string $created_at
 * @property string $updated_at
 * @property ProductVariation $productVariation
 * @property Variation $variation
 */
class Variation_location_detail extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['product_variation_id', 'variation_id', 'product_id', 'location_id', 'qty_available', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productVariation()
    {
        return $this->belongsTo('App\Models\Pos\ProductVariation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function variation()
    {
        return $this->belongsTo('App\Models\Pos\Variation');
    }
}
