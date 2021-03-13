<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $product_id
 * @property int $tag_id
 * @property string $created_at
 * @property string $updated_at
 * @property Product $product
 */
class Product_tag extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'product_tag';

    /**
     * @var array
     */
    protected $fillable = ['product_id', 'tag_id', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->belongsTo('App\Models\Banquet\Product');
    }
}
