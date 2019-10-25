<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblStateDescriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_state_descriptions', function (Blueprint $table) {
            $table->bigIncrements('description_id')->comment('说明ID');
            $table->string('state_code')->comment('状态代码');
            $table->string('state_description')->comment('状态说明');
            $table->string('description_detail')->comment('说明详细');
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
        Schema::dropIfExists('tbl_state_descriptions');
    }
}
