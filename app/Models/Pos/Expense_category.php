<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property string $name
 * @property Business $business
 */
class Expense_category extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['business_id', 'name'];

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
