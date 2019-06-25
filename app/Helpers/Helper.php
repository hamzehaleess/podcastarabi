<?php

namespace App\Helpers;

use Illuminate\Http\Request;
use Feeds;
use Image;
use App\Podcast;
use App\PodcastItem;
use Illuminate\Support\Facades\DB;

class Helper
{
    public static function store($feedUrl, $nameAr)
    {
        $feed = Feeds::make($feedUrl);
        $feed->force_feed(true);
        $feed->handle_content_type();
        $podcastName = $feed->get_title();

        if ($podcastName && $podcastName != '') {
            // check if the feed's first item has an audio file in its enclosure
            if (strpos($feed->get_items()[0]->get_enclosure()->get_type(), 'audio') !== false) {

                // Save the feed thumbnail to file system and save file path to database
                $img = Image::make($feed->get_image_url())->resize(100, 100);
                $img->save(public_path('images/' . $podcastName . '.png'));

                Podcast::where([
                    'name' => $nameAr,
                    'feed_url' => $feedUrl
                ])->update(['name' => $podcastName,
                    'feed_thumbnail_location' => 'images/' . $podcastName . '.png',
                ]);

                foreach ($feed->get_items() as $item) {
                    PodcastItem::create([
                        'podcast_id' => DB::table('podcasts')
                            ->select('id', 'name_ar')
                            ->where('name_ar', '=', $nameAr)->first()->id,
                        'url' => $item->get_permalink(),
                        'audio_url' => $item->get_enclosure()->get_link(),
                        'title' => $item->get_title(),
                        'description' => trim(strip_tags(str_limit($item->get_description(), 200))),
                        'published_at' => $item->get_date('Y-m-d H:i:s'),
                    ]);
                }

                // @todo Podcast was added
                // return redirect('podcasts/player');
                return true;
            } else {
                // @todo flash msg
                return 'This doesn\'t seem to be an RSS feed with audio files. Please try another feed.';
            }
        } else {
            // @todo Could not add podcast
            return 'Sorry, this feed cannot be imported. Please try another feed';
        }
    }
}