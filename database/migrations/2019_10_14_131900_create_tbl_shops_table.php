<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_shops', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('店铺ID');
            $table->string('shop_code')->comment('店铺代码');
            $table->string('shop_name')->comment('店铺名称');
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
        Schema::dropIfExists('tbl_shops');
    }
}
