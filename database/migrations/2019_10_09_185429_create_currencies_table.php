<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currencies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('code', 5);
            $table->string('symbol', 5);
            $table->timestamps();
        });

        //Insert Default Currency (Naira)
        DB::table('currencies')->insert(
 array('name' =>'Naira' ,
        'code'=> '&#8358;',
        'symbol'=>'NGN'
         )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currencies');
    }
}
