<?php

namespace App\Model\Banquet;

use Illuminate\Database\Eloquent\Model;

/**
 * @property integer $id
 * @property integer $department_id
 * @property integer $designation_id
 * @property int $user_id
 * @property string $first_name
 * @property string $last_name
 * @property string $email
 * @property string $phone_number
 * @property string $password
 * @property string $permissions
 * @property string $user_avatar
 * @property int $stripe_id
 * @property string $last_login
 * @property string $current_billing_plan
 * @property string $card_holder_name
 * @property string $card_brand
 * @property string $card_last_four
 * @property string $trial_ends_at
 * @property string $created_at
 * @property string $updated_at
 * @property string $deleted_at
 * @property DepartmentMaster $departmentMaster
 * @property DesignationMaster $designationMaster
 * @property Activation[] $activations
 * @property Bookingdetail[] $bookingdetails
 * @property Callable[] $callables
 * @property Call[] $calls
 * @property Category[] $categories
 * @property CateringServiceType[] $cateringServiceTypes
 * @property Company[] $companies
 * @property Contract[] $contracts
 * @property Customer[] $customers
 * @property Decorator[] $decorators
 * @property DepartmentMaster[] $departmentMasters
 * @property Deposittype[] $deposittypes
 * @property DesignationMaster[] $designationMasters
 * @property EmailTemplate[] $emailTemplates
 * @property Entertainment[] $entertainments
 * @property Equipment[] $equipment
 * @property EventCaterer[] $eventCaterers
 * @property EventLocation[] $eventLocations
 * @property EventRoom[] $eventRooms
 * @property Eventdetail[] $eventdetails
 * @property Hotel[] $hotels
 * @property InviteUser[] $inviteUsers
 * @property InvoiceReceivePayment[] $invoiceReceivePayments
 * @property Invoice[] $invoices
 * @property Lead[] $leads
 * @property Leadsource[] $leadsources
 * @property MainMenu[] $mainMenus
 * @property Meetable[] $meetables
 * @property Meeting[] $meetings
 * @property Menu[] $menus
 * @property MenuType[] $menuTypes
 * @property Miscellaneou[] $miscellaneouses
 * @property Notification[] $notifications
 * @property Opportunity[] $opportunities
 * @property Option[] $options
 * @property Owner[] $owners
 * @property Parking[] $parkings
 * @property Pay[] $pays
 * @property Persistence[] $persistences
 * @property Photographer[] $photographers
 * @property PrintTemplate[] $printTemplates
 * @property Product[] $products
 * @property Qtemplate[] $qtemplates
 * @property Quotation[] $quotations
 * @property Reminder[] $reminders
 * @property Revision[] $revisions
 * @property RoleUser[] $roleUsers
 * @property SalesOrder[] $salesOrders
 * @property SalesTeam[] $salesTeams
 * @property Setting[] $settings
 * @property SubMenu[] $subMenus
 * @property Subscription[] $subscriptions
 * @property SupplierPackage[] $supplierPackages
 * @property Task[] $tasks
 * @property Term[] $terms
 * @property Throttle[] $throttles
 * @property TypeEvent[] $typeEvents
 * @property UserLogin[] $userLogins
 * @property Userassigne[] $userassignes
 */
class User extends Model
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
    protected $fillable = ['department_id', 'designation_id', 'user_id', 'first_name', 'last_name', 'email', 'phone_number', 'password', 'permissions', 'user_avatar', 'stripe_id', 'last_login', 'current_billing_plan', 'card_holder_name', 'card_brand', 'card_last_four', 'trial_ends_at', 'created_at', 'updated_at', 'deleted_at'];

    /**
     * The connection name for the model.
     * 
     * @var string
     */
    protected $connection = 'mysql_banquet';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function departmentMaster()
    {
        return $this->belongsTo('App\Model\Banquet\DepartmentMaster', 'department_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function designationMaster()
    {
        return $this->belongsTo('App\Model\Banquet\DesignationMaster', 'designation_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activations()
    {
        return $this->hasMany('App\Model\Banquet\Activation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function bookingdetails()
    {
        return $this->hasMany('App\Model\Banquet\Bookingdetail');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function callables()
    {
        return $this->hasMany('App\Model\Banquet\Callable');
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
    public function categories()
    {
        return $this->hasMany('App\Model\Banquet\Category');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cateringServiceTypes()
    {
        return $this->hasMany('App\Model\Banquet\CateringServiceType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function companies()
    {
        return $this->hasMany('App\Model\Banquet\Company');
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

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function decorators()
    {
        return $this->hasMany('App\Model\Banquet\Decorator');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function departmentMasters()
    {
        return $this->hasMany('App\Model\Banquet\DepartmentMaster');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function deposittypes()
    {
        return $this->hasMany('App\Model\Banquet\Deposittype');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function designationMasters()
    {
        return $this->hasMany('App\Model\Banquet\DesignationMaster');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function emailTemplates()
    {
        return $this->hasMany('App\Model\Banquet\EmailTemplate');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entertainments()
    {
        return $this->hasMany('App\Model\Banquet\Entertainment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function equipment()
    {
        return $this->hasMany('App\Model\Banquet\Equipment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventCaterers()
    {
        return $this->hasMany('App\Model\Banquet\EventCaterer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventLocations()
    {
        return $this->hasMany('App\Model\Banquet\EventLocation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventRooms()
    {
        return $this->hasMany('App\Model\Banquet\EventRoom');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eventdetails()
    {
        return $this->hasMany('App\Model\Banquet\Eventdetail');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function hotels()
    {
        return $this->hasMany('App\Model\Banquet\Hotel');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inviteUsers()
    {
        return $this->hasMany('App\Model\Banquet\InviteUser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoiceReceivePayments()
    {
        return $this->hasMany('App\Model\Banquet\InvoiceReceivePayment');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices()
    {
        return $this->hasMany('App\Model\Banquet\Invoice');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leads()
    {
        return $this->hasMany('App\Model\Banquet\Lead');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leadsources()
    {
        return $this->hasMany('App\Model\Banquet\Leadsource');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mainMenus()
    {
        return $this->hasMany('App\Model\Banquet\MainMenu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function meetables()
    {
        return $this->hasMany('App\Model\Banquet\Meetable');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function meetings()
    {
        return $this->hasMany('App\Model\Banquet\Meeting');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menus()
    {
        return $this->hasMany('App\Model\Banquet\Menu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function menuTypes()
    {
        return $this->hasMany('App\Model\Banquet\MenuType');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function miscellaneouses()
    {
        return $this->hasMany('App\Model\Banquet\Miscellaneou');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notifications()
    {
        return $this->hasMany('App\Model\Banquet\Notification');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function opportunities()
    {
        return $this->hasMany('App\Model\Banquet\Opportunity');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function options()
    {
        return $this->hasMany('App\Model\Banquet\Option');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function owners()
    {
        return $this->hasMany('App\Model\Banquet\Owner');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function parkings()
    {
        return $this->hasMany('App\Model\Banquet\Parking');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function pays()
    {
        return $this->hasMany('App\Model\Banquet\Pay');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function persistences()
    {
        return $this->hasMany('App\Model\Banquet\Persistence');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function photographers()
    {
        return $this->hasMany('App\Model\Banquet\Photographer');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function printTemplates()
    {
        return $this->hasMany('App\Model\Banquet\PrintTemplate');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Model\Banquet\Product');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function qtemplates()
    {
        return $this->hasMany('App\Model\Banquet\Qtemplate');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotations()
    {
        return $this->hasMany('App\Model\Banquet\Quotation');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reminders()
    {
        return $this->hasMany('App\Model\Banquet\Reminder');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function revisions()
    {
        return $this->hasMany('App\Model\Banquet\Revision');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function roleUsers()
    {
        return $this->hasMany('App\Model\Banquet\RoleUser');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesOrders()
    {
        return $this->hasMany('App\Model\Banquet\SalesOrder');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salesTeams()
    {
        return $this->hasMany('App\Model\Banquet\SalesTeam');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function settings()
    {
        return $this->hasMany('App\Model\Banquet\Setting');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subMenus()
    {
        return $this->hasMany('App\Model\Banquet\SubMenu');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscriptions()
    {
        return $this->hasMany('App\Model\Banquet\Subscription');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supplierPackages()
    {
        return $this->hasMany('App\Model\Banquet\SupplierPackage');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function tasks()
    {
        return $this->hasMany('App\Model\Banquet\Task');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function terms()
    {
        return $this->hasMany('App\Model\Banquet\Term');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function throttles()
    {
        return $this->hasMany('App\Model\Banquet\Throttle');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function typeEvents()
    {
        return $this->hasMany('App\Model\Banquet\TypeEvent');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userLogins()
    {
        return $this->hasMany('App\Model\Banquet\UserLogin');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function userassignes()
    {
        return $this->hasMany('App\Model\Banquet\Userassigne');
    }
}
