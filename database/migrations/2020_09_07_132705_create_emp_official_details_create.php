<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpOfficialDetailsCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_official_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('emp_id');
            $table->float('emp_salary');
            $table->string('emp_department');
            $table->string('emp_designation');
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
        Schema::dropIfExists('emp_official_details_create');
    }
}
