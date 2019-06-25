<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;


class PodcastItem extends Model
{
	use CrudTrait;

	protected $fillable = ['podcast_id', 'title', 'description', 'url', 'audio_url','published_at'];
	// protected $visible = ['podcast_id', 'title', 'description', 'url', 'audio_url', 'published_at', 'created_at'];

	/**
	 * An item belongs to a podcast
	 */
	 public function podcast()
	 {
        return $this->belongsTo('App\Podcast');
     }

}
