<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jun 2019 11:01:48 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Backpack\CRUD\CrudTrait;

/**
 * Class EmbedTemplate
 * 
 * @property int $id
 * @property string $code
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 *
 * @package App
 */
class EmbedTemplate extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	use CrudTrait;
	
	protected $fillable = [
		'code'
	];
}
