<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->integer('blr_1_4')->default(0)->unsigned();
            $table->integer('blr_5_11')->default(0)->unsigned();
            $table->integer('blr_gl')->default(0)->unsigned();
            $table->integer('blr_dr')->default(0)->unsigned();
            $table->integer('rus_1_4_rus')->default(0)->unsigned();
            $table->integer('rus_5_8_rus')->default(0)->unsigned();
            $table->integer('rus_9_11_rus')->default(0)->unsigned();
            $table->integer('rus_1_4_blr')->default(0)->unsigned();
            $table->integer('rus_5_8_blr')->default(0)->unsigned();
            $table->integer('rus_9_11_blr')->default(0)->unsigned();
            $table->integer('onl_1_4_rus')->default(0)->unsigned();
            $table->integer('onl_5_8_rus')->default(0)->unsigned();
            $table->integer('onl_9_11_rus')->default(0)->unsigned();
            $table->integer('onl_1_4_blr')->default(0)->unsigned();
            $table->integer('onl_5_8_blr')->default(0)->unsigned();
            $table->integer('onl_9_11_blr')->default(0)->unsigned();
            $table->integer('geo')->default(0)->unsigned();
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
        Schema::dropIfExists('prices');
    }
}
