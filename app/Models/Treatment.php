<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Treatment
 * 
 * @property int $id
 * @property string $sante_soin
 * @property string $type
 * @property Carbon $date
 * @property string $nom_produit
 * @property string $effectue_par
 * @property string $remarques
 * @property string $rappel
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property int $health_records_id
 * 
 * @property HealthRecord $health_record
 *
 * @package App\Models
 */
class Treatment extends Model {
	protected $table = 'treatments';

	protected $casts = [
		'health_records_id' => 'int'
	];

	protected $dates = [
		'date'
	];

	protected $fillable = [
		'sante_soin',
		'type',
		'date',
		'nom_produit',
		'effectue_par',
		'remarques',
		'rappel',
		'health_records_id'
	];

	public function health_record() {
		return $this -> belongsTo(HealthRecord::class, 'health_records_id');
	}
}
