<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Laravel\Cashier\BillableTrait;
use Laravel\Cashier\BillableInterface;

/**
 * An Eloquent Model: 'User'
 *
 * @property integer $id
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string $firstname
 * @property string $lastname
 * @property string $telephone
 * @property string $company
 * @property string $org_type
 * @property string $city
 * @property string $country
 * @property string $state
 * @property string $source
 * @property boolean $admin
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property boolean $stripe_active
 * @property string $stripe_id
 * @property string $stripe_plan
 * @property string $last_four
 * @property \Carbon\Carbon $trial_ends_at
 * @property \Carbon\Carbon $subscription_ends_at
 */
class User extends Eloquent implements UserInterface, RemindableInterface, BillableInterface {

	use BillableTrait;

    protected $dates = ['trial_ends_at', 'subscription_ends_at'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

}