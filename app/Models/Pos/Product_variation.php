<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property int $product_id
 * @property boolean $is_dummy
 * @property string $created_at
 * @property string $updated_at
 * @property VariationLocationDetail[] $variationLocationDetails
 */
class Product_variation extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['name', 'product_id', 'is_dummy', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function variationLocationDetails()
    {
        return $this->hasMany('App\Models\Pos\VariationLocationDetail');
    }
}
