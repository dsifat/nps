<?php namespace Tests\APIs;

use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Backend\EmailGroup;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EmailGroupApiTest extends TestCase
{
    use ApiTestTrait;
    use WithoutMiddleware;
    use DatabaseTransactions;

    /**
     * @test
     */
    public function test_create_email_group()
    {
        $emailGroup = EmailGroup::factory()->make()->toArray();

        $this->response = $this->json(
            'POST',
            '/api/backend/email_groups',
            $emailGroup
        );

        $this->assertApiResponse($emailGroup);
    }

    /**
     * @test
     */
    public function test_read_email_group()
    {
        $emailGroup = EmailGroup::factory()->create();

        $this->response = $this->json(
            'GET',
            '/api/backend/email_groups/'.$emailGroup->id
        );

        $this->assertApiResponse($emailGroup->toArray());
    }

    /**
     * @test
     */
    public function test_update_email_group()
    {
        $emailGroup = EmailGroup::factory()->create();
        $editedEmailGroup = EmailGroup::factory()->make()->toArray();

        $this->response = $this->json(
            'PUT',
            '/api/backend/email_groups/'.$emailGroup->id,
            $editedEmailGroup
        );

        $this->assertApiResponse($editedEmailGroup);
    }

    /**
     * @test
     */
    public function test_delete_email_group()
    {
        $emailGroup = EmailGroup::factory()->create();

        $this->response = $this->json(
            'DELETE',
            '/api/backend/email_groups/'.$emailGroup->id
        );

        $this->assertApiSuccess();
        $this->response = $this->json(
            'GET',
            '/api/backend/email_groups/'.$emailGroup->id
        );

        $this->response->assertStatus(404);
    }
}
