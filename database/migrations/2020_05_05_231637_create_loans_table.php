<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) { 
            $table->id();
            $table->string('client');
            $table->string('quantity');
            $table->string('pays');
            $table->string('share');
            $table->string('total_to_pay');
            $table->string('date_mini');
            $table->string('date_expiration');
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
        Schema::dropIfExists('loans');
    }
}
