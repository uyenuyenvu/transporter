<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('order_type')->nullable()->comment('1: xe nội bài, 2: xe đường dài');
            $table->integer('transaction_type')->nullable()->comment('1: tự chạy, 2: bán đơn');
            $table->text('place_start')->nullable()->comment('Điểm đón');
            $table->text('place_end')->nullable()->comment('Điểm đến');
            $table->string('customer_name')->nullable()->comment('Tên khách');
            $table->string('number_phone')->nullable()->comment('Số điện thoại khách');
            $table->string('customer_id')->nullable()->comment('Id khách');
            $table->integer('status')->nullable()->comment('Trạng thái cuốc xe');
            $table->date('time')->nullable()->comment('Thời gian');
            $table->text('note')->nullable()->comment('Ghi chú');
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
        Schema::dropIfExists('orders');
    }
}
