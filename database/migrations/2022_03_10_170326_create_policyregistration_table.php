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
        Schema::create('policyregistration', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('companyid');
            $table->foreign('companyid')->references('id')->on('registerationcompany');
            $table->string('policyname');
            $table->string('policytype');
            $table->longText('policydesc');
            $table->double('policyprice');
            $table->double('claimprice');
            $table->integer('timeperiod');
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
        Schema::dropIfExists('policyregistration');
    }
};