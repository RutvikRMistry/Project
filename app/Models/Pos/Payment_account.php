<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property string $name
 * @property string $type
 * @property string $note
 * @property int $created_by
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Business $business
 */
class Payment_account extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['business_id', 'name', 'type', 'note', 'created_by', 'deleted_at', 'created_at', 'updated_at'];

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
