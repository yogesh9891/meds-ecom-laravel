<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedsLeafletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meds_leaflets', function (Blueprint $table) {
            $table->id();
            $table->string('c_1_3_1_generic_id_no');
            $table->string('c_1_3_2_pdf_no');
            $table->string('c_1_3_3_language');
            $table->string('c_1_3_4_pdf_file');
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
        Schema::dropIfExists('meds_leaflets');
    }
}
