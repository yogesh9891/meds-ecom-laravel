<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedsProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('2-1-meds-products', function (Blueprint $table) {
            $table->id();
            $table->string('c_2_1_1_generic_id_no');
            $table->string('c_2_1_2_product_no');
            $table->string('c_2_1_3_short_strength_id');
            $table->string('c_2_1_4_display_at');
            $table->string('c_2_1_5_product_name_h2');
            $table->string('c_2_1_6_med_use');
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
        Schema::dropIfExists('meds_products');
    }
}
