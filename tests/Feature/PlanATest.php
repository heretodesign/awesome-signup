<?php

namespace Tests\Feature;

use App\PlanA;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Auth\User as Authenticatable;

class PlanATest extends TestCase
{
    /** @test **/
    public function a_student_can_register_for_group_discounts_through_a_form()
    {
        $this->withoutExceptionHandling();

        $this->actingAs(factory(PlanA::class)->create());

        $response = $this->post('/ten', $this->data());

        $response->assertCount(1, PlanA::all());
    }

        /** @test **/
        public function firstname_is_required()
        {
            $this->withoutExceptionHandling();

            // $this-actingAs(factory(\App\Admin::class)->create([
            //     'email' => 'admin@amboss.com'
            // ]));
    
            $response = $this->post('/ten', array_merge($this->data(), ['firstname' => '']));
    
            $response->assertSessionHasErrors('firstname');

            $this-assertCount(0, PlanA::all());
        }


        public function data()
        {
            return [
                'firstname' => 'Michael',
                'lastname' => 'Davids',
                'email' => 'michael@gmail.com'
            ];
        }
}
