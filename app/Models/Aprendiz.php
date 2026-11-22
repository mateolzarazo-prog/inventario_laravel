<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Aprendiz
 * 
 * @property int $id
 * @property string $nombre
 * @property string $programa
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @package App\Models
 */
class Aprendiz extends Model
{
	protected $table = 'aprendiz';

	protected $fillable = [
		'nombre',
		'programa'
	];
}
