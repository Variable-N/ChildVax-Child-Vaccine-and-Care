<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Vaccine;
class VaccineTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_add_vaccine_check()
    {
        $vaccine1 = Vaccine::make([
            'name' => "Sample Vaccine",
            'administer_day' => 30,
            
        ]);
        $this->assertInstanceOf(Vaccine::class, $vaccine1);
    }
    public function test_delete_vaccine_check()
    {
        $vaccine1 = Vaccine::make([
            'name' => "Sample Vaccine",
            'administer_day' => 30,
            
        ]);
        if($vaccine1)
        $vaccine1 -> delete();
        $this->assertTrue(true);
    }
    public function test_duplicate_vaccine_check()
    {
        $vaccine1 = Vaccine::make([
            'name' => "Sample Vaccine 1",
            'administer_day' => 30,
            
        ]);
        $vaccine2 = Vaccine::make([
            'name' => "Sample Vaccine 2",
            'administer_day' => 30,
            
        ]);
        $this->assertTrue($vaccine1->name != $vaccine2->name);
    }
}
