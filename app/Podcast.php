<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Backpack\CRUD\CrudTrait;


class Podcast extends Model
{
    use CrudTrait;

	protected $fillable = ['name_ar', 'name', 'web_url', 'category_id', 'podcast_type_id', 
		'feed_url', 'feed_thumbnail_location', 'last_episode', 'description' 
	];

	/**
	 * A podcast has many items
	 */
	public function items()
    {
        return $this->hasMany(PodcastItem::class);
	}

	public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

	public function podcastType()
    {
        return $this->belongsTo(PodcastType::class, 'podcast_type_id');
    }
}