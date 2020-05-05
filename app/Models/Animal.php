<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Animal
 * 
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property Carbon $birth_date
 * @property string $type
 * @property string $breed
 * @property int $users_id
 * @property int $veterinary_id
 * @property int $health_records_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property User $user
 * @property Veterinary $veterinary
 * @property HealthRecord $health_record
 *
 * @package App\Models
 */
class Animal extends Model {
	protected $table = 'animals';

	protected $casts = [
		'users_id' => 'int',
		'veterinary_id' => 'int',
		'health_records_id' => 'int'
	];

	protected $dates = [
		'birth_date'
	];

	protected $fillable = [
		'first_name',
		'last_name',
		'birth_date',
		'type',
		'breed',
		'users_id',
		'veterinary_id',
		'health_records_id'
	];

	public function user() {
		return $this -> belongsTo(User::class, 'users_id');
	}

	public function veterinary() {
		return $this -> belongsTo(Veterinary::class);
	}

	public function health_record() {
		return $this -> belongsTo(HealthRecord::class, 'health_records_id');
	}
}
