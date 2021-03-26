<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $sales_team_id
 * @property int $country_id
 * @property int $state_id
 * @property int $city_id
 * @property int $user_id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $lostpw
 * @property string $address
 * @property string $website
 * @property string $phone
 * @property string $mobile
 * @property string $category
 * @property string $fax
 * @property string $title
 * @property string $company_avatar
 * @property string $company_attachment
 * @property int $main_contact_person
 * @property string $longitude
 * @property string $latitude
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property City $city
 * @property Country $country
 * @property SalesTeam $salesTeam
 * @property State $state
 * @property User $user
 * @property Call[] $calls
 * @property Contract[] $contracts
 * @property Customer[] $customers
 */
class Company extends Model
{
    /**
     * @var array
     */
    protected $fillable = ['sales_team_id', 'country_id', 'state_id', 'city_id', 'user_id', 'name', 'email', 'password', 'lostpw', 'address', 'website', 'phone', 'mobile', 'category', 'fax', 'title', 'company_avatar', 'company_attachment', 'main_contact_person', 'longitude', 'latitude', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo('App\Model\Banquet\City');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo('App\Model\Banquet\Country');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salesTeam()
    {
        return $this->belongsTo('App\Model\Banquet\SalesTeam');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function state()
    {
        return $this->belongsTo('App\Model\Banquet\State');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\Model\Banquet\User');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function calls()
    {
        return $this->hasMany('App\Model\Banquet\Call');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contracts()
    {
        return $this->hasMany('App\Model\Banquet\Contract');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function customers()
    {
        return $this->hasMany('App\Model\Banquet\Customer');
    }
}
