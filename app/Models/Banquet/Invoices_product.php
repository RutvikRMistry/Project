<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $invoice_id
 * @property int $product_id
 * @property string $product_name
 * @property string $description
 * @property int $quantity
 * @property float $price
 * @property float $sub_total
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property Invoice $invoice
 */
class Invoices_product extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['invoice_id', 'product_id', 'product_name', 'description', 'quantity', 'price', 'sub_total', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function invoice()
    {
        return $this->belongsTo('App\Models\Banquet\Invoice');
    }
}
