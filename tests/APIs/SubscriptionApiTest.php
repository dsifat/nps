<?php namespace Tests\APIs;

use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Backend\Subscription;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SubscriptionApiTest extends TestCase
{
    use ApiTestTrait;
    use WithoutMiddleware;
    use DatabaseTransactions;

    /**
     * @test
     */
    // public function test_create_subscription()
    // {
    //     $subscription = Subscription::factory()->make()->toArray();

    //     $this->response = $this->json(
    //         'POST',
    //         '/api/backend/subscriptions',
    //         $subscription
    //     );

    //     $this->assertApiResponse($subscription);
    // }

    // /**
    //  * @test
    //  */
    // public function test_read_subscription()
    // {
    //     $subscription = Subscription::factory()->create();

    //     $this->response = $this->json(
    //         'GET',
    //         '/api/backend/subscriptions/'.$subscription->id
    //     );

    //     $this->assertApiResponse($subscription->toArray());
    // }

    // /**
    //  * @test
    //  */
    // public function test_update_subscription()
    // {
    //     $subscription = Subscription::factory()->create();
    //     $editedSubscription = Subscription::factory()->make()->toArray();

    //     $this->response = $this->json(
    //         'PUT',
    //         '/api/backend/subscriptions/'.$subscription->id,
    //         $editedSubscription
    //     );

    //     $this->assertApiResponse($editedSubscription);
    // }

    // /**
    //  * @test
    //  */
    // public function test_delete_subscription()
    // {
    //     $subscription = Subscription::factory()->create();

    //     $this->response = $this->json(
    //         'DELETE',
    //         '/api/backend/subscriptions/'.$subscription->id
    //     );

    //     $this->assertApiSuccess();
    //     $this->response = $this->json(
    //         'GET',
    //         '/api/backend/subscriptions/'.$subscription->id
    //     );

    //     $this->response->assertStatus(404);
    // }
}
