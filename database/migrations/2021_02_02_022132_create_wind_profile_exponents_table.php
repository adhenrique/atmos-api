<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWindProfileExponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wind_profile_exponents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stability_class');
            $table->decimal('rough', 3);
            $table->decimal('smooth', 3);

            //default columns
            $table->timestamps();
            $table->timestamp('inactivated_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wind_profile_exponents');
    }
}
