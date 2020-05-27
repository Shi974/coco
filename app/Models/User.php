<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

/**
 * Class User
 * 
 * @property int $id
 * @property string $username
 * @property string $email
 * @property Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $address_plus
 * @property string $postal_code
 * @property string $city
 * @property string $country
 * @property string $phone
 * @property string $phone_plus
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Animal[] $animals
 *
 * @package App\Models
 */
class User extends Authenticatable {
    use Notifiable;

	protected $guard = 'users';

	protected $table = 'users';

	protected $dates = [
		'email_verified_at'
	];

	protected $hidden = [
		'password',
		'remember_token'
	];

	protected $fillable = [
		'username',
		'email',
		'email_verified_at',
		'password',
		'remember_token',
		'first_name',
		'last_name',
		'address',
		'address_plus',
		'postal_code',
		'city',
		'country',
		'phone',
		'phone_plus'
	];

	/**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

	public function animals() {
		return $this->hasMany(Animal::class, 'users_id');
	}
}
