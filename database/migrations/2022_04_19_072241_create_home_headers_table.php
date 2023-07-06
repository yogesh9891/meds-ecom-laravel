<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomeHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('3-1-home-header', function (Blueprint $table) {
            $table->id();
            $table->string('c_3_1_1_image_no');
            $table->string('c_3_1_2_image_name');
            $table->string('c_3_1_3_image_alt_tag');
            $table->string('c_3_1_4_message_on_image');
            $table->string('c_3_1_5_text_color');
            $table->string('c_3_1_6_url_to_open');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('home_headers');
    }
}
