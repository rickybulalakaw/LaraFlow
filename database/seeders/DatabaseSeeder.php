<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\OfficeHeadSeeder;
use Database\Seeders\SystemSettingSeeder;
use Database\Seeders\DocumentedInformationSeeder;
use Modules\Performance\Database\Seeders\PerformanceManagementSettingSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $firstUser = User::factory()->create([
            'name' => env('ADMIN_USER_FIRSTNAME', 'Test'),
            'last_name' => env('ADMIN_USER_LASTNAME', 'User'),
            'is_employee' => True,
            'email' => env('ADMIN_USER_EMAIL', 'test@example.com'),
            'is_system_admin' => true,
            'uuid' =>  Str::orderedUuid(),
        ]);

        User::factory()->create([
            'name' => 'Test 2',
            'last_name' => 'User 2',
            'is_employee' => True,
            'email' => 'test2@example.com',
            'uuid' =>  Str::orderedUuid(),
        ]);

        User::factory()->create([
            'name' => 'Hr ',
            'last_name' => 'User ',
            'is_employee' => True,
            'email' => 'hr@example.com',

            'uuid' =>  Str::orderedUuid(),
        ]);

        User::factory()->create([
            'name' => 'Head ',
            'last_name' => 'of Agency ',
            'is_employee' => True,
            'email' => 'head@example.com',
            'uuid' =>  Str::orderedUuid(),
        ]);

 


        if (env('APP_ENV') == 'local') {
            $this->call(
                [
                    // OfficeHeadSeeder::class,
                ]
            );
        }
    }
}
