<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Support\Facades\Route;

class WebTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_admin_products()
            {
                $response = $this->get('/admin_products');
                $response->assertStatus(200);
            }

        public function test_cart()
        {
            $response = $this->get('/cart');
            $response->assertStatus(200);
        }

        public function test_account()
        {
            $response = $this->get('/');
            $response->assertStatus(200);
        }

        public function test_product_details()
        {
            $response = $this->get('/');
            $response->assertStatus(200);
        }

        public function test_users()
                {
                    $response = $this->get('/');
                    $response->assertStatus(200);
                }
}
