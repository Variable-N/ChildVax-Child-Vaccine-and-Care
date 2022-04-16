<?php

use App\Appointment;
use Illuminate\Database\Seeder;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Appointment::create([
            "child_id" => 1,
            "doctor_id" => 1,
            "user_id" =>3,
            "hospital_id" => 1,
            "time" => date("Y-m-d H:i:s"),
        ]);
        //
    }
}
