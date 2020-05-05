<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HealthRecord
 * 
 * @property int $id
 * @property string $vaccine_info
 * @property string $disease_info
 * @property string $diet_info
 * @property string $misc_info
 * @property string $misc_plus_info
 * @property Carbon $next_appointment
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Animal[] $animals
 *
 * @package App\Models
 */
class HealthRecord extends Model {
	protected $table = 'health_records';

	protected $dates = [
		'next_appointment'
	];

	protected $fillable = [
		'vaccine_info',
		'disease_info',
		'diet_info',
		'misc_info',
		'misc_plus_info',
		'next_appointment'
	];

	public function animals() {
		return $this -> hasMany(Animal::class, 'health_records_id');
	}
}
