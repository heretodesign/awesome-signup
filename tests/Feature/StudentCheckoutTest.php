<?php

namespace Tests\Feature;

use App\Checkout;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Auth\User as Authenticatable;

class StudentCheckoutTest extends TestCase
{
    use RefreshDatabase;

    /** @test **/
    public function a_payment_can_be_added()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/checkouts', [
            'promo' => '2-for-one',
            'email' => 'abel@test.com',
            'address' => '13 street, Kuala Lumpur, Malaysia',
            'city' => 'Kuala Lumpur',
            'state' => 'Kuala Lumpur',
            'country' => 'Malaysia',
            'phone' => '031838482',
            'name_on_card' => 'abel developer',
            'card_number' => '3293939939393993',
            'validity' => '1022',
            'cvc' => '432',
        ]);

        $response->assertOk();

        $response->assertCount(1, Checkout::all());
    }

    /** @test **/
    public function an_email_is_required()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/checkouts', [
            'email' => '',
            'address' => '13 street, Kuala Lumpur, Malaysia',
            'city' => 'Kuala Lumpur',
            'state' => 'Kuala Lumpur',
            'country' => 'Malaysia',
            'phone' => '031838482',
            'name_on_card' => 'abel developer',
            'card_number' => '3293939939393993',
            'validity' => '1022',
            'cvc' => '432',
        ]);

        $response->assertSessionHasErrors('email');
    }

    /** @test **/
    public function an_address_is_required()
    {
        $this->withoutExceptionHandling();

        $response = $this->post('/checkouts', [
            'email' => 'developer@test.com',
            'address' => '',
            'city' => 'Kuala Lumpur',
            'state' => 'Kuala Lumpur',
            'country' => 'Malaysia',
            'phone' => '031838482',
            'name_on_card' => 'abel developer',
            'card_number' => '3293939939393993',
            'validity' => '1022',
            'cvc' => '432',
        ]);

        $response->assertSessionHasErrors('address');
    }

    /** @test **/
    public function a_checkout_can_be_updated()
    {
        $this->withoutExceptionHandling();

        $this->post('/checkouts', [
            'email' => 'developer@test.com',
            'address' => '2424 jalan street',
            'city' => 'Kuala Lumpur',
            'state' => 'Kuala Lumpur',
            'country' => 'Malaysia',
            'phone' => '031838482',
            'name_on_card' => 'abel developer',
            'card_number' => '3293939939393993',
            'validity' => '1022',
            'cvc' => '432',
        ]);

        $checkout = Checkout::first();

        $response = $this->patch('/checkouts/' . $checkout->id, [
            'email' => 'kelvin@test.com',
            'address' => '6789 jalan street',
            'city' => 'Kuala Lumpur',
            'state' => 'Kuala Lumpur',
            'country' => 'Malaysia',
            'phone' => '031838482',
            'name_on_card' => 'abel developer',
            'card_number' => '3293939939393993',
            'validity' => '1022',
            'cvc' => '432',
        ]);

        $response->assertEquals('New Email', Checkout::first()->email);
        $response->assertEquals('New Address', Checkout::first()->address);

    }

}
