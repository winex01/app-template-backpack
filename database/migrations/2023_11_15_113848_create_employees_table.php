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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->string('photo')->nullable();
            $table->string('badge_id')->nullable();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name')->nullable();

            $table->date('birth_date')->nullable();
            $table->string('birth_place')->nullable();

            $table->string('pagibig')->nullable();
            $table->string('sss')->nullable();
            $table->string('gsis')->nullable();
            $table->string('philhealth')->nullable();
            $table->string('tin')->nullable();

            $table->string('mobile_number')->nullable();
            $table->string('telephone_number')->nullable();

            $table->string('company_email')->nullable();
            $table->string('personal_email')->nullable();

            $table->string('registered_address')->nullable();
            $table->string('local_home_address')->nullable();
            $table->string('foreign_address')->nullable();
            $table->string('zip_code')->nullable(); 

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
