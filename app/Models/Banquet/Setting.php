<?php

namespace App\Models\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property string $site_name
 * @property string $site_logo
 * @property string $pdf_logo
 * @property string $site_email
 * @property string $address
 * @property string $phone
 * @property string $currency
 * @property string $currency_position
 * @property string $date_format
 * @property string $time_format
 * @property string $trial_period
 * @property string $sales_tax
 * @property string $email_host
 * @property string $email_port
 * @property string $email_username
 * @property string $email_password
 * @property string $created_at
 * @property string $updated_at
 * @property User $user
 */
class Setting extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['user_id', 'site_name', 'site_logo', 'pdf_logo', 'site_email', 'address', 'phone', 'currency', 'currency_position', 'date_format', 'time_format', 'trial_period', 'sales_tax', 'email_host', 'email_port', 'email_username', 'email_password', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Models\Banquet\User');
    }
}
