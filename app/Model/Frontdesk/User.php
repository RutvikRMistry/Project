<?php

namespace App\Model\Frontdesk;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $username
 * @property string $email
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $dob
 * @property string $address
 * @property string $sex
 * @property string $picture
 * @property string $password
 * @property string $id_type
 * @property string $id_number
 * @property string $id_card_image
 * @property string $remarks
 * @property boolean $vip
 * @property boolean $email_verified
 * @property boolean $email_verified_code
 * @property boolean $sms_verified
 * @property boolean $sms_verified_code
 * @property boolean $status
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 * @property AppliedCouponCode[] $appliedCouponCodes
 * @property Payment[] $payments
 * @property Reservation $reservation
 * @property Transaction $transaction
 */
class User extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['username', 'email', 'first_name', 'last_name', 'phone', 'dob', 'address', 'sex', 'picture', 'password', 'id_type', 'id_number', 'id_card_image', 'remarks', 'vip', 'email_verified', 'email_verified_code', 'sms_verified', 'sms_verified_code', 'status', 'remember_token', 'created_at', 'updated_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function appliedCouponCodes()
    {
        return $this->hasMany('App\Models\Front\AppliedCouponCode');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payments()
    {
        return $this->hasMany('App\Models\Front\Payment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function reservation()
    {
        return $this->hasOne('App\Models\Front\Reservation', 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function transaction()
    {
        return $this->hasOne('App\Models\Front\Transaction', 'user_id');
    }
}
