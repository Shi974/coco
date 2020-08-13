<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class HealthRecord
 * 
 * @property int $id
 * 
 * @property Collection|Animal[] $animals
 * @property Collection|Treatment[] $treatments
 *
 * @package App\Models
 */
class HealthRecord extends Model {
	protected $table = 'health_records';
	public $timestamps = false;

	public function animals() {
		return $this -> hasMany(Animal::class, 'health_records_id');
	}

	public function treatments() {
		return $this -> hasMany(Treatment::class, 'health_records_id');
	}
}
