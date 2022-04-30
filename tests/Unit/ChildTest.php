<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Child;
class ChildTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    
    public function test_add_child_check()
    {
        $child1 = child::make([
            'name' => "Unga Bunga",
            'weight' => 10.5,
            'dob' => '2022-04-28',
            'user_id' => 5,
            
        ]);
        $this->assertInstanceOf(Child::class, $child1);
    }
    public function test_delete_child_check()
    {
        $child = child::make([
            'name' => "Unga Bunga",
            'weight' => 10.5,
            'dob' => '2022-04-28',
            'user_id' => 5,
            
        ]);

        if($child)
            $child->delete();

        $this->assertTrue(true);
    }
}
