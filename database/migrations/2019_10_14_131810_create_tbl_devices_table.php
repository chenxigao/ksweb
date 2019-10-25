<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDevicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_devices', function (Blueprint $table) {
            $table->bigIncrements('device_id')->comment('设备ID');
            $table->string('device_code')->comment('设备代码');
            $table->string('device_sn')->comment('设备SN号');
            $table->string('model_name')->comment('设备型号');
            $table->boolean('delete_flg')->default(false)->comment('删除标志,FALSE：未删除, TRUE：删除');
            $table->bigInteger('shop_id')->comment('店铺ID');
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
        Schema::dropIfExists('tbl_devices');
    }
}
