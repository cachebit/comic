<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class KuosTest extends TestCase
{
    /** @test */
    public function kuos_routes_should_all_get_200()
    {
        $kuos = $this->get('kuos');

        $kuos->assertStatus(200);

        $show = $this->get('kuos/show');

        $show->assertStatus(200);

        $show = $this->get('kuos/create');

        $show->assertStatus(200);
    }


    public function a_kuos_can_be_featured()
    {
      # code...
    }

    public function can_get_featured_kuos()
    {
      # code...
    }
}
