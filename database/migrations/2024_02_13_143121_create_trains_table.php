<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {

            $table->id();
            $table -> string('agency', 60);
            $table -> string('departure_station', 60);
            $table -> string('arrival_station', 60);
            $table -> date('departure_date');
            $table -> string('departure_time');
            $table -> string('arrival_time');
            $table -> string('train_code', 5);
            $table -> string('carriage_num', 5);
            $table -> boolean('in_time') -> default(true);
            $table -> boolean('cancelled') -> default(false);

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
        Schema::dropIfExists('trains');
    }
};
