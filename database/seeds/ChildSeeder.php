<?php

use App\Child;
use Illuminate\Database\Seeder;

class ChildSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Child::create([
            "name" => "Child One",
            "dob" => '2010-01-01',
            "weight" => '29.3',
            "user_id" => 3,
        ]);
        Child::create([
            "name" => "Child Two",
            "dob" => '2012-01-01',
            "weight" => '27.3',
            "user_id" => 3,
        ]);
    }
}
