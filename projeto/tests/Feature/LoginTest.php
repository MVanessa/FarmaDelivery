<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Session;
use App\User;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testLoginForm()
    {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    public function testLogin()
    {
        Session::start();
	    $response = $this->call('POST', '/login', [
	        'email' => 'lu@gmail.com',
	        'password' => '123',
	        '_token' => csrf_token()
	    ]);

	    $this->assertEquals(302, $response->getStatusCode());
    }

}
