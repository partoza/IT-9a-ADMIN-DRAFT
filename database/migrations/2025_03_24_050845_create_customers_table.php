<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('first_name', 255);
            $table->string('middle_name', 255)->nullable();
            $table->string('last_name', 255);
            $table->unsignedBigInteger('user_id'); // Change from int() to unsignedBigInteger()
            $table->string('province', 255);
            $table->string('city', 255);
            $table->string('zip_code', 4);
            $table->string('address', 255);
            $table->string('phone_number', 11);
            $table->string('driver_license_number', 10);
            $table->date('license_expiration_date');
            $table->text('license_img_path');
            $table->boolean('is_banned')->default(false);
            $table->dateTime('created_at');
            $table->unsignedBigInteger('created_by_id')->nullable();
            $table->dateTime('updated_at')->nullable();
            $table->unsignedBigInteger('updated_by_id')->nullable();
        
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            $table->foreign('created_by_id')->references('user_id')->on('users');
            $table->foreign('updated_by_id')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
