<?php

use Illuminate\Database\Seeder;
use App\Vaccine;
class VaccineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $vaccines = [
            [
                "name" => "Hepatitis B (Dose 1)",
                "administer_day" => 0,
            ],
            [
                "name" => "Hepatitis B (Dose 2)",
                "administer_day" => 30,
            ],
            [
                "name" => "Hepatitis B (Dose 3)",
                "administer_day" => 180,
            ],
            [
                "name" => "Rotavirus (Dose 1)",
                "administer_day" => 60,
            ],
            [
                "name" => "Rotavirus (Dose 2)",
                "administer_day" => 120,
            ],
            [
                "name" => "Rotavirus (Dose 3)",
                "administer_day" => 180,
            ],
        ];
        foreach($vaccines as $vaccine)
            Vaccine::create($vaccine);

    }
}
