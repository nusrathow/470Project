<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use App\Http\Controllers;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_index()
    {
       $response = $this->get('/');
       $response->assertStatus(200);
    }
}
