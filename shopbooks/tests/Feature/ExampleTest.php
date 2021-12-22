<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }
    public function test_login()
    {
        $response = $this->get('/home/login');

        $response->assertStatus(200);
    }
    public function test_register()
    {
        $response = $this->get('/home/register');

        $response->assertStatus(200);
    }
    public function test_book()
    {
        $response = $this->get('/home/booksListing/1');

        $response->assertStatus(200);
    }
    
}
