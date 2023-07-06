<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('14-summary', function (Blueprint $table) {
            $table->id();
            $table->string('c_14_1_cart_no');
            $table->string('c_14_2_online_invoice_no',50);
            $table->string('c_14_4_cart_url',100);
            $table->string('c_14_6_proforma_invoice_url',100);
            $table->string('c_14_7_order_invoice_url',100);
            $table->string('c_14_8_excel_order_url',100);
            $table->string('c_14_9_login_email',50);
            $table->string('c_14_10_payer_full_name',50);
            $table->string('c_14_11_patient_relation_payer',50);
            $table->string('c_14_12_payer_address_line_1');
            $table->string('c_14_13_payer_address_line_2');
            $table->string('c_14_14_pay_city',50);
            $table->string('c_14_15_payer_state',50);
            $table->string('c_14_16_payer_zip',50);
            $table->string('c_14_17_payer_country',50);
            $table->string('c_14_18_payer_mobile',50);
            $table->string('c_14_19_patient_name',50);
            $table->string('c_14_20_patient_sex',50);
            $table->string('c_14_21_patient_age',50);
            $table->string('c_14_22_parcel_receiver’s_full_name',50);
            $table->string('c_14_23_receiver_relation_patient',50);
            $table->string('c_14_24_receiver_address_line_1',50);
            $table->string('c_14_25_receiver_address_line_2',50);
            $table->string('c_14_26_receiver_city',50);
            $table->string('c_14_27_receiver_state',50);
            $table->string('c_14_28_receiver_zip',50);
            $table->string('c_14_29_receiver_country',50);
            $table->string('c_14_30_receiver_mobile',50);
            $table->string('c_14_31_end_use_selected',50);
            $table->string('c_14_32_doctor_prescription_url',100);
            $table->string('c_14_33_undertaking_url',100);
            $table->decimal('c_14_74_total_order_value',10,2);
            $table->string('c_14_75_coupon_code_used');
            $table->string('c_14_76_promo_discount');
            $table->decimal('c_14_77_shipping_charges',10,2);
            $table->decimal('c_14_78_additional_charges',10,2);
            $table->decimal('c_14_79_semi_total_amount',10,2);
            $table->string('c_14_80_convert_payment_mode');
            $table->decimal('c_14_81_pod_charges',10,2);
            $table->decimal('c_14_82_credit_card_processing_fees',10,2);
            $table->string('c_14_83_currency_of_order',50);
            $table->decimal('c_14_84_total_amount',10,2);
            $table->string('c_14_85_refil_after_days');
            $table->string('c_14_86_first_name',50);
            $table->string('c_14_87_last_name',50);
            $table->string('c_14_88_state',50);
            $table->string('c_14_89_country',50);
            $table->string('c_14_90_email_address',50);
            $table->string('c_14_91_cc_request_details');
            $table->string('c_14_92_cc_request_link');
            $table->string('c_14_93_pay_mode');
            $table->string('c_14_94_forex_currency',50);
            $table->decimal('c_14_95_amount',10,2);
            $table->string('c_14_96_forex_received');
            $table->date('c_14_97_received_on_date');
            $table->string('c_14_98_conversion_rate');
            $table->string('c_14_99_usd_received');
            $table->string('c_14_100_usd_bal_due');
            $table->string('c_14_107_cc__payment_received_amount');
            $table->string('c_14_108_cc__payment_received_date');
            $table->string('c_14_112_bt__payment_received_amount');
            $table->string('c_14_113_bt__payment_received_date');
            $table->string('c_14_115_parcel_shipment_date');
            $table->string('c_14_116_carrier');
            $table->string('c_14_117_tracking_no');
            $table->string('c_14_118_tracking_url');
            $table->string('c_14_124_delivered_date');
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
        Schema::dropIfExists('summaries');
    }
}
