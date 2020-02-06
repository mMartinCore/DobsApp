<?php

namespace Tests\Feature;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
                if(auth()){
                    $response = $this->get('corpses');
                    $response->assertStatus(200);
                }



    }
}
