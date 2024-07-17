<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainFormDataTable extends Migration
{
    public function up()
    {
        Schema::create('main_form_data', function (Blueprint $table) {
            $table->id();
            $table->string('name');
       
            $table->string('phone');
      
            $table->text('order');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('main_form_data');
    }
}
