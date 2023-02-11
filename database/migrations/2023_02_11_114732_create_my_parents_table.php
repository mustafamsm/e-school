<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_parents', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');

            //Fatherinformation
            $table->string('Name_Father');
            $table->string('National_ID_Father');
            $table->string('Passport_ID_Father')->nullable();
            $table->string('Phone_Father');
            $table->string('Job_Father')->default('no Job');
            $table->string('Nationality_Father');
            
            
            $table->string('Address_Father');

            //Mother information
            $table->string('Name_Mother');
            $table->string('National_ID_Mother');
            $table->string('Passport_ID_Mother')->nullable();
            $table->string('Phone_Mother');
            $table->string('Job_Mother')->default('no job');
            $table->string('Nationality_Mother');
            $table->string('Religion_Mother');
            $table->string('Address_Mother');
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
        Schema::dropIfExists('my_parents');
    }
}
