<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PagesTest extends TestCase
{
  /** @test */
  public function pages_routes_should_all_get_200()
  {
      $kuos = $this->get('/');

      $kuos->assertStatus(200);

      $show = $this->get('about');

      $show->assertStatus(200);
  }
}
