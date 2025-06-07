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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->boolean('is_superadmin')->nullable();
            $table->boolean('is_allowed')->nullable();
            $table->string('role')->default('guest')->comment('Enum class of student, teacher, admin, parent');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {      
            $table->dropColumn('is_superadmin');
            $table->dropColumn('is_allowed');
            $table->dropColumn('role');
        });
    }
};
