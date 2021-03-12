<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property int $location_id
 * @property int $product_id
 * @property string $rack
 * @property string $row
 * @property string $position
 * @property string $created_at
 * @property string $updated_at
 * @property Business $business
 */
class Product_rack extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['business_id', 'location_id', 'product_id', 'rack', 'row', 'position', 'created_at', 'updated_at'];

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
}
