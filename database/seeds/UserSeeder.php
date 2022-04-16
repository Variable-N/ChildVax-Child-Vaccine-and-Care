<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name" => "Admin",
            "email" => "admin@gmail.com",
            "phone" => "01616161616",
            "hospital_id" => 1,
            "level" => "2",
            "password" => bcrypt("12345678"),
        ]);
        User::create([
            "name" => "Agent",
            "email" => "agent@gmail.com",
            "phone" => "01717171717",
            "hospital_id" => 1,
            "level" => "1",
            "password" => bcrypt("12345678"),
        ]);
        User::create([
            "name" => "Parent",
            "email" => "parent@gmail.com",
            "phone" => "01818181818",
            "father_nid" => "81818181818",
            "father_nid" => "91818181818",
            "level" => "0",
            "password" => bcrypt("12345678"),
        ]);
        //
    }
}
