<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePodcastsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcasts', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('name_ar');
            $table->string('web_url')->nullable();
            $table->string('feed_url');
            $table->string('feed_thumbnail_location')->nullable();
            $table->integer('category_id')->unsigned();
            $table->integer('podcast_type_id')->unsigned();
            $table->string('last_episode')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->text('description')->nullable();
            $table->unique(['name', 'feed_url']);
            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('podcasts');
    }
}
