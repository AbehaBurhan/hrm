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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            // $table->foreignIdFor(User::class);
            $table->foreignId('user_id')->constrained();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('job');
            $table->integer('salary');
            $table->string('cnic');
            $table->string('status');
            $table->date('joining_date');
            $table->string('education');
            $table->string('department');
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
        Schema::dropIfExists('employees');
    }
};
