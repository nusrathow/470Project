<?php

namespace Tests\Unit;

//use PHPUnit\FrameworkTestCase;
use Tests\TestCase;
use App\Http\Controllers;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_store()
    {
        $data = [
            'name' => 'test',
            'email' => 'test@gmail.com',
            'mobile' => '01234567890',
            'password' => '123456'
        ];

        $this->withoutMiddleware();
                $response = $this->call('POST', '/admin_products', $data, [], [], ['HTTP_REFERER' => '/admin_products']);
                $response->assertRedirect('/admin_products');
    }
}
