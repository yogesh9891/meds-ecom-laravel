<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog_news', function (Blueprint $table) {
            $table->id();
            $table->string('blog_news_no');
            $table->string('posted_source');
            $table->string('posted_or_source');
            $table->string('date');
            $table->string('source_url');
            $table->string('blog_title_h1');
            $table->string('page_url_name');
            $table->string('browsing_path_name');
            $table->string('hyperlink_page_tag');
            $table->string('big_image');
            $table->string('big_image_alt_tag');
            $table->string('medium_image');
            $table->string('medium_image_alt_tag');
            $table->string('image_icon');
            $table->string('image_icon_alt_tag');
            $table->string('home_page');
            $table->string('blog_news');
            $table->string('medication');
            $table->string('brief_introduction');
            $table->string('full_information');
            $table->string('meta_title');
            $table->string('meta_description');
            $table->string('meta_keyword');
            $table->string('canonical');
            $table->string('language');
            $table->string('country');
            $table->string('distribution');
            $table->string('author');
            $table->string('robots');
            $table->string('revisit_after');
            $table->string('rating_value');
            $table->string('rating_count');
            $table->string('other_tag_3');
            $table->string('other_tag_4');
            $table->string('other_tag_5');
            $table->softDeletes();
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
        Schema::dropIfExists('blog_news');
    }
}
