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
            ->assertSee('MiniShop Admin — Categories');

        $this->get('/admin/products')->assertStatus(200)
            ->assertSee('MiniShop Admin — Products');

        $this->get('/admin/about')->assertStatus(200)
            ->assertSee('P06 Route & Controller');
    }

    public function test_layout_placeholder_and_flash_routes_work(): void
    {
        $this->get('/admin/categories/create')->assertStatus(200)
            ->assertSee('Them moi Category');

        $this->get('/admin/products/create')->assertStatus(200)
            ->assertSee('Them moi Product');

        $this->get('/admin/flash-demo')->assertRedirect('/admin');
    }
}
