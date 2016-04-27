<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food', function (Blueprint $table) {


            //describtion file
            $table->increments('id');
            $table->string('name');
            $table->string('type');
            $table->string('price');
            $table->string('discribtion');
            $table->rememberToken();
            $table->timestamps();

            //imag 1
            $table->string('imag_name1');
            $table->string('imag_alt1');
            $table->string('imag_type1');
            $table->integer('ref_id1');
            //imag 2
            $table->string('imag_name2');
            $table->string('imag_alt2');
            $table->string('imag_type2');
            $table->integer('ref_id2');
            //imag 3
            $table->string('imag_name3');
            $table->string('imag_alt3');
            $table->string('imag_type3');
            $table->integer('ref_id3');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('food');
    }
}
