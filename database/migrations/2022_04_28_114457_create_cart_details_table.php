<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_details', function (Blueprint $table) {
            $table->id();
            $table->string('cart_id');
            $table->string('user_id');
            $table->string('c_14_34_medicine_no');
            $table->string('c_14_35_description');
            $table->string('c_14_36_quantity_pack');
            $table->string('c_14_37_net_price_pack');
            $table->string('c_14_38_no_of_packs');
            $table->string('c_14_39_total_quantity');
            $table->string('c_14_40_medicine_form');
            $table->string('c_14_41_total_amount');
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('cart_details');
    }
}
