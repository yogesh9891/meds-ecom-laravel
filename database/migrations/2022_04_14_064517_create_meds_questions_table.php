<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedsQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meds_questions', function (Blueprint $table) {
            $table->id();
            $table->string('c_1_2_1_generic_id_no');
            $table->string('c_1_2_2_qs_no');
            $table->string('c_1_2_3_question');
            $table->string('c_1_2_4_answer');
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
        Schema::dropIfExists('meds_questions');
    }
}
