<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AppointmentSalarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('appointment_salaries')->insert(['uuid' =>  Str::orderedUuid(), 'appointment_id' => 1, 'step' => 1, 'date_started' => '2020-01-03', 'uuid' => Str::orderedUuid()]);
        DB::table('appointment_salaries')->insert(['uuid' =>  Str::orderedUuid(), 'appointment_id' => 2, 'step' => 1, 'date_started' => '2020-01-03', 'uuid' => Str::orderedUuid()]);
        DB::table('appointment_salaries')->insert(['uuid' =>  Str::orderedUuid(), 'appointment_id' => 3, 'step' => 1, 'date_started' => '2020-01-03', 'uuid' => Str::orderedUuid()]);

    }
}
