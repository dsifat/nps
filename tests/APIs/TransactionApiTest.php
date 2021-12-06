<?php namespace Tests\APIs;

use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Backend\Transaction;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TransactionApiTest extends TestCase
{
    use ApiTestTrait;
    use WithoutMiddleware;
    use DatabaseTransactions;

    /**
     * @test
     */
    // public function test_create_transaction()
    // {
    //     $transaction = Transaction::factory()->make()->toArray();

    //     $this->response = $this->json(
    //         'POST',
    //         '/api/backend/transactions',
    //         $transaction
    //     );

    //     $this->assertApiResponse($transaction);
    // }

    // /**
    //  * @test
    //  */
    // public function test_read_transaction()
    // {
    //     $transaction = Transaction::factory()->create();

    //     $this->response = $this->json(
    //         'GET',
    //         '/api/backend/transactions/'.$transaction->id
    //     );

    //     $this->assertApiResponse($transaction->toArray());
    // }

    // /**
    //  * @test
    //  */
    // public function test_update_transaction()
    // {
    //     $transaction = Transaction::factory()->create();
    //     $editedTransaction = Transaction::factory()->make()->toArray();

    //     $this->response = $this->json(
    //         'PUT',
    //         '/api/backend/transactions/'.$transaction->id,
    //         $editedTransaction
    //     );

    //     $this->assertApiResponse($editedTransaction);
    // }

    // /**
    //  * @test
    //  */
    // public function test_delete_transaction()
    // {
    //     $transaction = Transaction::factory()->create();

    //     $this->response = $this->json(
    //         'DELETE',
    //         '/api/backend/transactions/'.$transaction->id
    //     );

    //     $this->assertApiSuccess();
    //     $this->response = $this->json(
    //         'GET',
    //         '/api/backend/transactions/'.$transaction->id
    //     );

    //     $this->response->assertStatus(404);
    // }
}
