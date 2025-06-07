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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid('uuid')->index();
            $table->string('name');
            $table->string('middle_name')->nullable();
            $table->string('extension')->nullable();
            $table->string('last_name');
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->rememberToken();
            // $table->boolean('is_superadmin')->default(false);
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->string('employee_number')->nullable()->unique();
            $table->integer('sex')->nullable()->comment("1=M, 2=F");
            $table->date('dob')->nullable();
            $table->text('gsis')->nullable();
            $table->text('sss')->nullable();
            $table->text('philhealth')->nullable();
            $table->text('umid')->nullable();
            $table->text('spouse_last_name')->nullable();
            $table->text('spouse_first_name')->nullable();
            $table->text('spouse_middle_name')->nullable();
            $table->text('spouse_extension_name')->nullable();
            $table->text('spouse_occupation')->nullable();
            $table->text('spouse_business_address')->nullable();
            $table->text('spouse_telephone_number')->nullable();
            $table->json('children')->nullable();
            $table->text('father_last_name')->nullable();
            $table->text('father_first_name')->nullable();
            $table->text('father_middle_name')->nullable();
            $table->text('father_extension_name')->nullable();
            $table->text('mother_last_name')->nullable();
            $table->text('mother_first_name')->nullable();
            $table->text('mother_maiden_name')->nullable();
            $table->text('mother_middle_name')->nullable();
            $table->text('mother_extension_name')->nullable();
            $table->json('education')->nullable();
            $table->json('work_experiences')->nullable();
            $table->json('eligibilities')->nullable();
            $table->json('trainings')->nullable();
            $table->json('voluntary_works')->nullable();
            $table->json('certifications')->nullable();
            $table->json('declarations')->nullable();
            $table->string('pds_photo_path')->nullable();
            $table->boolean('is_employee')->default(false)->comment('True means user can access HR processes. False is for applicants');
            $table->string('biometric_no')->nullable();
            $table->boolean('is_system_admin')->default(false);
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
