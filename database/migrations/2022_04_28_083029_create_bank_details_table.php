<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBankDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('5-bank-detail', function (Blueprint $table) {
            $table->id();
            $table->string('c_5_1_s_no');
            $table->string('c_5_2_company_code');
            $table->string('c_5_3_account_name');
            $table->string('c_5_4_account_address');
            $table->string('c_5_5_bank_name_location');
            $table->string('c_5_6_bank_branch_code');
            $table->string('c_5_7_account_type');
            $table->string('c_5_8_account_no');
            $table->string('c_5_9_bank_transfer_code');
            $table->string('c_5_10_email');
            $table->string('c_5_11_currency');
            $table->string('c_5_12_usd_rate');
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
        Schema::dropIfExists('bank_details');
    }
}
