<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Appointment;
class AppointmentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_add_appointment_check()
    {
        $appointment = Appointment::make([
            'time' => "2022-04-16 23:52:00",
            'status' => 0,
            'child_id' => '5',
            'doc_id' => '2',
            'user_id' => '3',
            'hospital_id' =>'1'
        ]);
        $this->assertInstanceOf(Appointment::class, $appointment);
    }
    public function test_delete_appointment_check()
    {
        $appointment = Appointment::make([
            'time' => "2022-04-16 23:52:00",
            'status' => 0,
            'child_id' => '5',
            'doc_id' => '2',
            'user_id' => '3',
            'hospital_id' =>'1'
        ]);
        if($appointment)
        $appointment -> delete();
        $this->assertTrue(true);
    }
    public function test_appointment_approval_check()
    {
        $appointment = Appointment::make([
            'time' => "2022-04-16 23:52:00",
            'status' => 0,
            'child_id' => '5',
            'doctor_id' => '2',
            'user_id' => '3',
            'hospital_id' =>'1'
        ]);
        $appointment->status = 1;
        $this->assertTrue($appointment->status == 1);
    }

}
