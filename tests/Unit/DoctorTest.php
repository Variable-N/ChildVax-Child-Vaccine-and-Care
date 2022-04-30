<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Doctor;
class DoctorTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_add_doctor_check()
    {
        $doctor1 = Doctor::make([
            'name' => "Dr. Quazi Adibur Rahman Adib",
            'qualification' => "NLP IP SP AI DL ML Expensive",
            'phone' => '01708770569',
            'email' => 'quazi.adibur.rahman.adib@g.bracu.ac.bd',
            'hospital_id' =>'1'
        ]);
        $this->assertInstanceOf(Doctor::class, $doctor1);
    }
    public function test_delete_doctor_check()
    {
        $doctor1 = Doctor::make([
            'name' => "Dr. Quazi Adibur Rahman Adib",
            'qualification' => "NLP IP SP AI DL ML Expensive",
            'phone' => '01708770569',
            'email' => 'quazi.adibur.rahman.adib@g.bracu.ac.bd',
            'hospital_id' =>'1'
        ]);
        if($doctor1)
        $doctor1 -> delete();
        $this->assertTrue(true);
    }
    
}
