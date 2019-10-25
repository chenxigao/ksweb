<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblAppStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_app_states', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('ID');
            $table->string('state_code')->comment('状态代码');
            $table->string('current_state')->comment('当前状态');
            $table->string('request_state')->comment('状态设置');
            $table->string('request_volumn')->comment('音量设置');
            $table->bigInteger('device_id')->comment('设备ID');
            $table->string('app_name')->comment('APP名称');
            $table->string('app_version')->comment('APP版本号');
            $table->boolean('delete_flg')->default(false)->comment('删除标志,FALSE：未删除, TRUE：删除');
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
        Schema::dropIfExists('tbl_app_states');
    }
}
