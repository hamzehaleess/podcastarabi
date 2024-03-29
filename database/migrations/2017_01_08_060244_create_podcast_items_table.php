<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePodcastItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podcast_items', function(Blueprint $table)
        {
            $table->increments('id');
            $table->longText('title');
            $table->string('description', 500);
            $table->string('url');
            $table->string('audio_url');
            $table->date('published_at');
            $table->boolean('is_mark_as_read')->default(0);
            $table->boolean('is_mark_as_favorite')->default(0);
            $table->integer('podcast_id')->unsigned();
            $table->foreign('podcast_id')->references('id')->on('podcasts')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('podcast_items');
    }
}
