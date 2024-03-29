<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStabilityClassificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stability_classifications', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ums');
            $table->string('class');
            $table->integer('time_id');
            $table->integer('condition_id');

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
        Schema::dropIfExists('stability_classifications');
    }
}
