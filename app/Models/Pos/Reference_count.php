<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property string $ref_type
 * @property int $ref_count
 * @property string $created_at
 * @property string $updated_at
 * @property Business $business
 */
class Reference_count extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['business_id', 'ref_type', 'ref_count', 'created_at', 'updated_at'];

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
