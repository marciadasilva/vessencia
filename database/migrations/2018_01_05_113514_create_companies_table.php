<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
          $table->increments('id');
          $table->longText('about');
          $table->string('facebook');
          $table->string('twitter')->nullable();
          $table->string('instagram')->nullable();
          $table->string('phone');
          $table->string('email');
          $table->string('address');
          $table->longText('description');
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
        Schema::dropIfExists('companies');
    }
}
