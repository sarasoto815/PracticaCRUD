<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use \Illuminate\Support\Facades\DB;

class CreatePoets extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('poetas');
        Schema::create('poetas', function (Blueprint $table) {
            $table->increments('Poet_Code');
            $table->string('First_Name', 100);
            $table->string('SurName', 225);
            $table->string('Address', 225);
            $table->integer('PostCode');
            $table->string('Telephone_Number', 225);
            $table->timestamps();
        });
    }


    public function down()
    { Schema::table('poetas', function (Blueprint $table) {
        Schema::dropIfExists('poetas');

        });
    }
}
