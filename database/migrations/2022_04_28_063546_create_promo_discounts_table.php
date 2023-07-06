<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePromoDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('12-promo-discount', function (Blueprint $table) {
            $table->id();
            $table->string('c_12_1_s_no');
            $table->string('c_12_2_coupon_code');
            $table->string('c_12_3_min_order_value');
            $table->string('c_12_4_discount_amt');
            $table->string('c_12_5_issued_on');
            $table->string('c_12_6_valid_till_date');
            $table->string('c_12_7_issued_email');
            $table->string('c_12_8_issued_name');
            $table->string('c_12_9_no_of_uses');
            $table->string('c_12_10_times_used');
            $table->string('c_12_11_promo_mail_1');
            $table->string('c_12_12_promo_mail_2');
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
        Schema::dropIfExists('promo_discounts');
    }
}
