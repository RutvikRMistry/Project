<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property string $name
 * @property string $description
 * @property float $width
 * @property float $height
 * @property float $paper_width
 * @property float $paper_height
 * @property float $top_margin
 * @property float $left_margin
 * @property float $row_distance
 * @property float $col_distance
 * @property int $stickers_in_one_row
 * @property boolean $is_default
 * @property boolean $is_continuous
 * @property int $stickers_in_one_sheet
 * @property string $created_at
 * @property string $updated_at
 * @property Business $business
 */
class Barcode extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['business_id', 'name', 'description', 'width', 'height', 'paper_width', 'paper_height', 'top_margin', 'left_margin', 'row_distance', 'col_distance', 'stickers_in_one_row', 'is_default', 'is_continuous', 'stickers_in_one_sheet', 'created_at', 'updated_at'];

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
        return $this->belongsTo('App\Model\Pos\Business');
    }
}
