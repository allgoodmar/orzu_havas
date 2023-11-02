<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_posts', function (Blueprint $table) {
            $table->id();
            $table->text('title_uz')->nullable()->default(null);
            $table->text('title_ru')->nullable()->default(null);
            $table->text('body_uz')->nullable()->default(null);
            $table->text('body_ru')->nullable()->default(null);
            $table->string('is_active')->nullable()->default(null);
            $table->string('cover_photo')->nullable()->default(null);
            $table->text('seo_title')->nullable()->default(null);
            $table->text('meta_description')->nullable()->default(null);
            $table->text('meta_keywords')->nullable()->default(null);
            $table->integer('order')->nullable()->default(null);
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
        Schema::dropIfExists('new_posts');
    }
}
