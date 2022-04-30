<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Hospital;

class HospitalTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_add_hospital_check()
    {
        $hospital1 = Hospital::make([
            'name' => "Sample Hospital",
            'address' => "Sample Address",
            'phone' => '01708770569',
            
        ]);
        $this->assertInstanceOf(Hospital::class, $hospital1);
    }
    public function test_delete_hospital_check()
    {
        $hospital1 = Hospital::make([
            'name' => "Sample Hospital",
            'address' => "Sample Address",
            'phone' => '01708770569',
            
        ]);
        if($hospital1)
        $hospital1 -> delete();
        $this->assertTrue(true);
    }
}
