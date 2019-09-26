<?php

namespace Tests\Feature;

use App\PlanB;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Auth\User as Authenticatable;


class PlanBTest extends TestCase
{
        /** @test **/
        public function a_student_can_register_for_group_discounts()
        {
            $this->withoutExceptionHandling();
    
            $response = $this->post('/twenty', [
                'firstname' => 'hello',
                'lastname' => 'world',
                'email' => 'hello@gmail.com',
            ]);
    
            $response->assertOk();
    
            $response->assertCount(1, PlanB::all());
        }
}
