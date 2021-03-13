<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $priority
 * @property string $iso_code
 * @property string $name
 * @property string $symbol
 * @property string $disambiguate_symbol
 * @property string $alternate_symbols
 * @property string $subunit
 * @property int $subunit_to_unit
 * @property boolean $symbol_first
 * @property string $html_entity
 * @property string $decimal_mark
 * @property string $thousands_separator
 * @property string $iso_numeric
 * @property int $smallest_denomination
 * @property boolean $active
 * @property string $created_at
 * @property string $updated_at
 */
class Currency extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['priority', 'iso_code', 'name', 'symbol', 'disambiguate_symbol', 'alternate_symbols', 'subunit', 'subunit_to_unit', 'symbol_first', 'html_entity', 'decimal_mark', 'thousands_separator', 'iso_numeric', 'smallest_denomination', 'active', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

}
