<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $variation_template_id
 * @property string $name
 * @property string $created_at
 * @property string $updated_at
 * @property VariationTemplate $variationTemplate
 */
class VariationValueTemplate extends Model
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
        return $this->belongsTo('App\Model\Pos\VariationTemplate');
    }
}
