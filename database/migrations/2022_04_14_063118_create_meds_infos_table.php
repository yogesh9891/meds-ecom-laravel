<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedsInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meds_infos', function (Blueprint $table) {
            $table->id();
            $table->string('c_1_1_1_generic_id_no');
            $table->string('c_1_1_2_main_generic_name');
            $table->string('c_1_1_3_other_names');
            $table->string('c_1_1_4_frontend_url');
            $table->string('c_1_1_5_browsing_path_name');
            $table->string('c_1_1_6_h1_title_in_blue');
            $table->string('c_1_1_7_name_in_home_diseases');
            $table->string('c_1_1_8_drug_info_title');
            $table->text('c_1_1_9_generic_intro_details');
            $table->string('c_1_1_10_temp');
            $table->string('c_1_1_11_di_source_name');
            $table->string('c_1_1_12_di_source_url');
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
        Schema::dropIfExists('meds_infos');
    }
}
