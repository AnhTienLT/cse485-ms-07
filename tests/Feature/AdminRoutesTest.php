<?php

namespace Tests\Feature;

use Tests\TestCase;

class AdminRoutesTest extends TestCase
{
    public function test_admin_routes_return_successful_responses(): void
    {
        $this->get('/admin')->assertStatus(200)
            ->assertSee('MiniShop Admin — Dashboard');

        $this->get('/admin/categories')->assertStatus(200)
            ->assertSee('MiniShop Admin — Categories (sap xay dung)');

        $this->get('/admin/products')->assertStatus(200)
            ->assertSee('MiniShop Admin — Products (sap xay dung)');

        $this->get('/admin/about')->assertStatus(200)
            ->assertSee('P06 Route & Controller');
    }
}
