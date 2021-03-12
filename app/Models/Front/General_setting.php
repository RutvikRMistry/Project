<?php

namespace App\Models\Front;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $title
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $color
 * @property string $cur
 * @property string $cur_sym
 * @property boolean $en
 * @property boolean $mn
 * @property string $sender_email
 * @property string $email_message
 * @property string $sms_api
 * @property string $check_in_time
 * @property string $check_out_time
 * @property string $created_at
 * @property string $updated_at
 */
class General_setting extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['title', 'name', 'email', 'phone', 'address', 'color', 'cur', 'cur_sym', 'en', 'mn', 'sender_email', 'email_message', 'sms_api', 'check_in_time', 'check_out_time', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_front';

}
