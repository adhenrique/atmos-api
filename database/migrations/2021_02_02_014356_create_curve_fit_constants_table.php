<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurveFitConstantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curve_fit_constants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('stability_class');
            $table->decimal('a', 6, 3);
            $table->decimal('b', 6, 3);
            $table->decimal('c', 6, 3);
            $table->decimal('d', 6, 3);
            $table->decimal('f', 6, 3);
            $table->integer('is_bigger_than_one_km');

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
        Schema::dropIfExists('curve_fit_constants');
    }
}
