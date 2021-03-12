<?php

namespace App\Models\Pos;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $currency_id
 * @property string $name
 * @property string $start_date
 * @property string $tax_number_1
 * @property string $tax_label_1
 * @property string $tax_number_2
 * @property string $tax_label_2
 * @property int $default_sales_tax
 * @property float $default_profit_percent
 * @property int $owner_id
 * @property string $time_zone
 * @property boolean $fy_start_month
 * @property string $accounting_method
 * @property float $default_sales_discount
 * @property string $sell_price_tax
 * @property string $logo
 * @property string $sku_prefix
 * @property boolean $enable_product_expiry
 * @property string $expiry_type
 * @property string $on_product_expiry
 * @property int $stop_selling_before
 * @property boolean $enable_tooltip
 * @property boolean $purchase_in_diff_currency
 * @property int $purchase_currency_id
 * @property float $p_exchange_rate
 * @property int $transaction_edit_days
 * @property int $stock_expiry_alert_days
 * @property string $keyboard_shortcuts
 * @property string $pos_settings
 * @property boolean $enable_brand
 * @property boolean $enable_category
 * @property boolean $enable_sub_category
 * @property boolean $enable_price_tax
 * @property boolean $enable_purchase_status
 * @property boolean $enable_lot_number
 * @property int $default_unit
 * @property boolean $enable_racks
 * @property boolean $enable_row
 * @property boolean $enable_position
 * @property boolean $enable_editing_product_from_purchase
 * @property string $sales_cmsn_agnt
 * @property boolean $item_addition_method
 * @property boolean $enable_inline_tax
 * @property string $currency_symbol_placement
 * @property string $enabled_modules
 * @property string $date_format
 * @property string $time_format
 * @property string $ref_no_prefixes
 * @property string $theme_color
 * @property int $created_by
 * @property boolean $is_active
 * @property string $created_at
 * @property string $updated_at
 * @property Currency $currency
 * @property Barcode[] $barcodes
 * @property Booking[] $bookings
 * @property Brand[] $brands
 * @property BusinessLocation[] $businessLocations
 * @property CashRegister[] $cashRegisters
 * @property Category[] $categories
 * @property Contact[] $contacts
 * @property CustomerGroup[] $customerGroups
 * @property ExpenseCategory[] $expenseCategories
 * @property InvoiceLayout[] $invoiceLayouts
 * @property InvoiceScheme[] $invoiceSchemes
 * @property PackagePermission[] $packagePermissions
 * @property PaymentAccount[] $paymentAccounts
 * @property Printer[] $printers
 * @property ProductRack[] $productRacks
 * @property Product[] $products
 * @property ReferenceCount[] $referenceCounts
 * @property ResTable[] $resTables
 * @property Role[] $roles
 * @property TaxRate[] $taxRates
 * @property Transaction[] $transactions
 * @property Unit[] $units
 * @property VariationTemplate[] $variationTemplates
 */
class Business extends Model
{
    /**
     * The table associated with the model.
     * 
     * @var string
     */
    protected $table = 'business';

    /**
     * @var array
     */
    protected $fillable = ['currency_id', 'name', 'start_date', 'tax_number_1', 'tax_label_1', 'tax_number_2', 'tax_label_2', 'default_sales_tax', 'default_profit_percent', 'owner_id', 'time_zone', 'fy_start_month', 'accounting_method', 'default_sales_discount', 'sell_price_tax', 'logo', 'sku_prefix', 'enable_product_expiry', 'expiry_type', 'on_product_expiry', 'stop_selling_before', 'enable_tooltip', 'purchase_in_diff_currency', 'purchase_currency_id', 'p_exchange_rate', 'transaction_edit_days', 'stock_expiry_alert_days', 'keyboard_shortcuts', 'pos_settings', 'enable_brand', 'enable_category', 'enable_sub_category', 'enable_price_tax', 'enable_purchase_status', 'enable_lot_number', 'default_unit', 'enable_racks', 'enable_row', 'enable_position', 'enable_editing_product_from_purchase', 'sales_cmsn_agnt', 'item_addition_method', 'enable_inline_tax', 'currency_symbol_placement', 'enabled_modules', 'date_format', 'time_format', 'ref_no_prefixes', 'theme_color', 'created_by', 'is_active', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_pos';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function currency()
    {
        return $this->belongsTo('App\Models\Pos\Currency');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function barcodes()
    {
        return $this->hasMany('App\Models\Pos\Barcode');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookings()
    {
        return $this->hasMany('App\Models\Pos\Booking');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function brands()
    {
        return $this->hasMany('App\Models\Pos\Brand');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function businessLocations()
    {
        return $this->hasMany('App\Models\Pos\BusinessLocation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cashRegisters()
    {
        return $this->hasMany('App\Models\Pos\CashRegister');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function categories()
    {
        return $this->hasMany('App\Models\Pos\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contacts()
    {
        return $this->hasMany('App\Models\Pos\Contact');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customerGroups()
    {
        return $this->hasMany('App\Models\Pos\CustomerGroup');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expenseCategories()
    {
        return $this->hasMany('App\Models\Pos\ExpenseCategory');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceLayouts()
    {
        return $this->hasMany('App\Models\Pos\InvoiceLayout');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceSchemes()
    {
        return $this->hasMany('App\Models\Pos\InvoiceScheme');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function packagePermissions()
    {
        return $this->hasMany('App\Models\Pos\PackagePermission');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paymentAccounts()
    {
        return $this->hasMany('App\Models\Pos\PaymentAccount');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function printers()
    {
        return $this->hasMany('App\Models\Pos\Printer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function productRacks()
    {
        return $this->hasMany('App\Models\Pos\ProductRack');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Pos\Product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function referenceCounts()
    {
        return $this->hasMany('App\Models\Pos\ReferenceCount');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function resTables()
    {
        return $this->hasMany('App\Models\Pos\ResTable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roles()
    {
        return $this->hasMany('App\Models\Pos\Role');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function taxRates()
    {
        return $this->hasMany('App\Models\Pos\TaxRate');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions()
    {
        return $this->hasMany('App\Models\Pos\Transaction');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function units()
    {
        return $this->hasMany('App\Models\Pos\Unit');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function variationTemplates()
    {
        return $this->hasMany('App\Models\Pos\VariationTemplate');
    }
}
