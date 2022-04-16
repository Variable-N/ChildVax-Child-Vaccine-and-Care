<?php

use App\Hospital;
use Illuminate\Database\Seeder;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hospital::create([
            "name" => "BRACU Hospital",
            "phone" => "01313131313",
            "address" => "66 Mohakhali",
        ]);
        Hospital::create([
            "name" => "NSU Hospital",
            "phone" => "31313131313",
            "address" => "66 Noakhali",
        ]);
        //
    }
}
