<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RepositoryControllerTest extends TestCase
{
    public function test_guest(): void
    {
        $this->get('repositories')->assertRedirect('login');        // indec
        $this->get('repositories/1')->assertRedirect('login');      // show
        $this->get('repositories/1/edit')->assertRedirect('login'); // edit
        $this->put('repositories/1')->assertRedirect('login');      // update
        $this->delete('repositories/1')->assertRedirect('login');   // destroy
        $this->get('repositories/create')->assertRedirect('login'); // create
        $this->post('repositories', [])->assertRedirect('login');   // guardar
    }
}
