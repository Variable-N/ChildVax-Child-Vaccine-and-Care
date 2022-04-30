<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;
class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_page_check()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
    public function test_register_page_check()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    public function test_user_registration_check()
    {
        $user1 = User::make([
            'name' => "John Doe",
            'email' => "dary@gmail.com",
            'phone' => '01823287323',
            'father_nid' => "123",
            'mother_nid' => "123",
            'password' => "12345678",
            'level' => 0
        ]);
        $this->assertInstanceOf(User::class, $user1);
        $this->assertTrue(true);;
    }
    public function test_duplicate_user_check()
    {
        $user1 = User::make([
            'name' => "John Doe",
            'email' => "dary@gmail.com",
            'phone' => '01823287323',
            'father_nid' => "123",
            'mother_nid' => "123",
            'password' => "12345678",
            'level' => 0
        ]);
        $user2 = User::make([
            'name' => "John Doe",
            'email' => "dar1y@gmail.com",
            'phone' => '01823287323',
            'father_nid' => "123",
            'mother_nid' => "123",
            'password' => "12345678",
            'level' => 0
        ]);
        $this->assertTrue($user1->email != $user2->email);
    }
}
