<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $business_id
 * @property string $name
 * @property string $header_text
 * @property string $invoice_no_prefix
 * @property string $quotation_no_prefix
 * @property string $invoice_heading
 * @property string $sub_heading_line1
 * @property string $sub_heading_line2
 * @property string $sub_heading_line3
 * @property string $sub_heading_line4
 * @property string $sub_heading_line5
 * @property string $invoice_heading_not_paid
 * @property string $invoice_heading_paid
 * @property string $quotation_heading
 * @property string $sub_total_label
 * @property string $discount_label
 * @property string $tax_label
 * @property string $total_label
 * @property string $total_due_label
 * @property string $paid_label
 * @property boolean $show_client_id
 * @property string $client_id_label
 * @property string $client_tax_label
 * @property string $date_label
 * @property boolean $show_time
 * @property boolean $show_brand
 * @property boolean $show_sku
 * @property boolean $show_cat_code
 * @property boolean $show_expiry
 * @property boolean $show_lot
 * @property boolean $show_sale_description
 * @property string $sales_person_label
 * @property boolean $show_sales_person
 * @property string $table_product_label
 * @property string $table_qty_label
 * @property string $table_unit_price_label
 * @property string $table_subtotal_label
 * @property string $cat_code_label
 * @property string $logo
 * @property boolean $show_logo
 * @property boolean $show_business_name
 * @property boolean $show_location_name
 * @property boolean $show_landmark
 * @property boolean $show_city
 * @property boolean $show_state
 * @property boolean $show_zip_code
 * @property boolean $show_country
 * @property boolean $show_mobile_number
 * @property boolean $show_alternate_number
 * @property boolean $show_email
 * @property boolean $show_tax_1
 * @property boolean $show_tax_2
 * @property boolean $show_barcode
 * @property boolean $show_payments
 * @property boolean $show_customer
 * @property string $customer_label
 * @property string $highlight_color
 * @property string $footer_text
 * @property string $module_info
 * @property boolean $is_default
 * @property string $design
 * @property string $cn_heading
 * @property string $cn_no_label
 * @property string $cn_amount_label
 * @property string $created_at
 * @property string $updated_at
 * @property Business $business
 * @property BusinessLocation[] $businessLocations
 */
class Invoice_layout extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['business_id', 'name', 'header_text', 'invoice_no_prefix', 'quotation_no_prefix', 'invoice_heading', 'sub_heading_line1', 'sub_heading_line2', 'sub_heading_line3', 'sub_heading_line4', 'sub_heading_line5', 'invoice_heading_not_paid', 'invoice_heading_paid', 'quotation_heading', 'sub_total_label', 'discount_label', 'tax_label', 'total_label', 'total_due_label', 'paid_label', 'show_client_id', 'client_id_label', 'client_tax_label', 'date_label', 'show_time', 'show_brand', 'show_sku', 'show_cat_code', 'show_expiry', 'show_lot', 'show_sale_description', 'sales_person_label', 'show_sales_person', 'table_product_label', 'table_qty_label', 'table_unit_price_label', 'table_subtotal_label', 'cat_code_label', 'logo', 'show_logo', 'show_business_name', 'show_location_name', 'show_landmark', 'show_city', 'show_state', 'show_zip_code', 'show_country', 'show_mobile_number', 'show_alternate_number', 'show_email', 'show_tax_1', 'show_tax_2', 'show_barcode', 'show_payments', 'show_customer', 'customer_label', 'highlight_color', 'footer_text', 'module_info', 'is_default', 'design', 'cn_heading', 'cn_no_label', 'cn_amount_label', 'created_at', 'updated_at'];

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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function businessLocations()
    {
        return $this->hasMany('App\Models\Pos\BusinessLocation');
    }
}
