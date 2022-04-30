<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class httpTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_registration_redirect_test()
    {
        $response = $this->post('/register',[
            'name' => "John Doe",
            'email' => "johny@gmail.com",
            'phone' => '01823287323',
            'father_nid' => "123",
            'mother_nid' => "123",
            'password' => "12345678",
            'password_confirmation' => "12345678",
        ]);
        $response->assertRedirect('/home');
    }
    public function test_login_redirect_test()
    {
        $response = $this->post('/login',[
            'email' => "parent@gmail.com",
            'password' => "12345678",
        ]);
        $response->assertRedirect('/home');
    }
}
