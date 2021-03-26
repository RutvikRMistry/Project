<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property string $name
 * @property int $product_id
 * @property boolean $is_dummy
 * @property string $created_at
 * @property string $updated_at
 * @property VariationLocationDetail[] $variationLocationDetails
 */
class ProductVariation extends Model
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
        return $this->hasMany('App\Model\Pos\VariationLocationDetail');
    }
}
