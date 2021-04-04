<?php

use App\Facades\VariablesFacade;
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
            $table->string('constant');
            $table->decimal('value', 8, 5);
            $table->integer('distance_operator_id')->default(VariablesFacade::config('distance_operators.na'));

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
