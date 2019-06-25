<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 16 Jun 2019 11:01:33 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Backpack\CRUD\CrudTrait;

/**
 * Class PodcastType
 * 
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property string $deleted_at
 * 
 * @property \Illuminate\Database\Eloquent\Collection $podcasts
 *
 * @package App
 */
class PodcastType extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;
	use CrudTrait;

	protected $fillable = [
		'name'
	];

	public function podcasts()
	{
		return $this->hasMany(\App\Podcast::class);
	}
}
