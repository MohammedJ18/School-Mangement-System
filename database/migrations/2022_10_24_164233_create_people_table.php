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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('system_id')->constrained();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('password');
            $table->string('phone')->unique();
            $table->boolean('gender')->nullable(); // Male : true , Female : Flase
            $table->date('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->integer('type')->default(1); // 1 : Student , 2 : Teacher , 3 : Parent
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
        Schema::dropIfExists('people');
    }
};
