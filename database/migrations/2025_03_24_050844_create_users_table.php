<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id'); // This is BIGINT UNSIGNED PRIMARY KEY
            $table->string('email', 255)->unique();
            $table->string('password', 255);
            $table->enum('role', ['Customer', 'Employee']);
            $table->dateTime('created_at');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->unsignedBigInteger('updated_by_id')->nullable();
        
            $table->foreign('created_by_id')->references('user_id')->on('users');
            $table->foreign('updated_by_id')->references('user_id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
