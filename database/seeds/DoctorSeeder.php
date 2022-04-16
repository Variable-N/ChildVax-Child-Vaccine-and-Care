<?php

use App\Doctor;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Doctor::create([
            "name" => "Doctor",
            "qualification" => "MBBS",
            "phone" => "01515151515",
            "email" => "doctor@gmail.com",
            "hospital_id" => 1
        ]);
        Doctor::create([
            "name" => "Doctor2",
            "qualification" => "MBBS",
            "phone" => "11515151515",
            "email" => "doctor2@gmail.com",
            "hospital_id" => 1
        ]);
        //
    }
}
