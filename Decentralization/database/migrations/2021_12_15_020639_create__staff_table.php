<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Staffs', function (Blueprint $table) {
            $table->id();
            $table->string("name",255);
            $table->string("email",255);
            $table->string("password",255);
            $table->string("position",255);
            $table->string("numberPhone",255);
            $table->unique('numberPhone', 'email');
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
        Schema::dropIfExists('_staff');
    }
}
