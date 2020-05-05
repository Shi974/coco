<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Veterinary
 * 
 * @property int $id
 * @property string $username
 * @property string $email
 * @property Carbon $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $first_name
 * @property string $last_name
 * @property string $address_practice
 * @property string $address_plus_practice
 * @property string $postal_code_practice
 * @property string $city_practice
 * @property string $country_practice
 * @property string $phone_practice
 * @property string $phone_plus_practice
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Animal[] $animals
 *
 * @package App\Models
 */
class Veterinary extends Model {
	protected $table = 'veterinaries';

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
		'address_practice',
		'address_plus_practice',
		'postal_code_practice',
		'city_practice',
		'country_practice',
		'phone_practice',
		'phone_plus_practice'
	];

	public function animals() {
		return $this -> hasMany(Animal::class);
	}
}
