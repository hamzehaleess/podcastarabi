<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jun 2019 11:01:14 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Backpack\CRUD\CrudTrait;

/**
 * Class Category
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \App\Podcast $podcast
 *
 * @package App
 */
class Category extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	use CrudTrait;
	
	protected $fillable = [
		'name',
		'name_ar'
	];

	public function podcast()
	{
		return $this->hasOne(\App\Podcast::class, 'id');
	}
}
