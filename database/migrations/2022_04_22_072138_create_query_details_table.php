<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQueryDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('query_details', function (Blueprint $table) {
            $table->id();
            $table->string('c_10_1_s_no');
            $table->date('c_10_2_date');
            $table->string('c_10_3_sent_from_page');
            $table->string('c_10_4_name');
            $table->string('c_10_5_business_name');
            $table->string('c_10_6_email');
            $table->string('c_10_7_contact_no');
            $table->string('c_10_8_country');
            $table->string('c_10_9_attachment');
            $table->string('c_10_10_message');
            $table->string('c_10_11_order_ref');
            $table->text('c_10_12_refill_pay_address');
            $table->text('c_10_13_refill_del_address');
            $table->string('c_10_14_refill_order_quantity');
            $table->string('c_10_15_refill_other_change');
            $table->string('c_10_16_email_reply');
            $table->string('c_10_17_wa_reply');
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
        Schema::dropIfExists('query_details');
    }
}
