<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();

            $table->text('h4');
            $table->text('span');
            $table->text('h4_2');
            $table->String('client1');
            $table->String('client2');
            $table->String('client3');
            $table->String('client4');
            $table->String('client5');
            $table->String('client6');
            $table->String('client7');
            $table->String('client8');

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
        Schema::dropIfExists('clients');
    }
}
