<?php

namespace App\Model\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $business_id
 * @property integer $invoice_scheme_id
 * @property integer $invoice_layout_id
 * @property integer $printer_id
 * @property int $location_id
 * @property string $name
 * @property string $landmark
 * @property string $country
 * @property string $state
 * @property string $city
 * @property string $zip_code
 * @property boolean $print_receipt_on_invoice
 * @property string $receipt_printer_type
 * @property string $mobile
 * @property string $alternate_number
 * @property string $email
 * @property string $website
 * @property string $custom_field1
 * @property string $custom_field2
 * @property string $custom_field3
 * @property string $custom_field4
 * @property string $deleted_at
 * @property string $created_at
 * @property string $updated_at
 * @property Business $business
 * @property InvoiceLayout $invoiceLayout
 * @property InvoiceScheme $invoiceScheme
 * @property Printer $printer
 */
class BusinessLocation extends Model
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
    protected $fillable = ['business_id', 'invoice_scheme_id', 'invoice_layout_id', 'printer_id', 'location_id', 'name', 'landmark', 'country', 'state', 'city', 'zip_code', 'print_receipt_on_invoice', 'receipt_printer_type', 'mobile', 'alternate_number', 'email', 'website', 'custom_field1', 'custom_field2', 'custom_field3', 'custom_field4', 'deleted_at', 'created_at', 'updated_at'];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function invoiceLayout()
    {
        return $this->belongsTo('App\Model\Pos\InvoiceLayout');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function invoiceScheme()
    {
        return $this->belongsTo('App\Model\Pos\InvoiceScheme');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function printer()
    {
        return $this->belongsTo('App\Model\Pos\Printer');
    }
}
