<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $variation_template_id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property VariationTemplate $variationTemplate
 */
class Variation_value_template extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['variation_template_id', 'name', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function variationTemplate()
    {
        return $this->belongsTo('App\Models\Pos\VariationTemplate');
    }
}
