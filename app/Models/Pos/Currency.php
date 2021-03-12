<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $country
 * @property string $currency
 * @property string $code
 * @property string $symbol
 * @property string $thousand_separator
 * @property string $decimal_separator
 * @property string $created_at
 * @property string $updated_at
 * @property Business[] $businesses
 */
class Currency extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['country', 'currency', 'code', 'symbol', 'thousand_separator', 'decimal_separator', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function businesses()
    {
        return $this->hasMany('App\Models\Pos\Business');
    }
}
