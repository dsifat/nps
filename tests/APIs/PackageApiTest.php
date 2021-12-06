<?php namespace Tests\APIs;

use Tests\TestCase;
use Tests\ApiTestTrait;
use App\Models\Backend\User;
use App\Models\Backend\Package;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PackageApiTest extends TestCase
{
    use ApiTestTrait;
    use DatabaseMigrations;

    public function test_user_can_read_a_single_package()
    {
        $this->withoutExceptionHandling();
        $this->actingAs($user = User::factory()->create(), 'api');

        $package = Package::factory()->create();
        $user->isp->packages()->save($package);

        $this->response = $this->json(
            'GET',
            '/api/v1/packages/' . $package->id
        );

        $expected = $package->toArray();
        unset($expected['binge_package_id']);

        $this->assertApiResponse($expected);
    }

    // public function test_user_can_read_packages()
    // {
    //     $this->withoutExceptionHandling();
    //     $this->actingAs($user = User::factory()->create(), 'api');

    //     $package1 = Package::factory()->create();
    //     $package2 = Package::factory()->create();
    //     $user->isp->packages()->saveMany([$package1, $package2]);

    //     // $this->response = $this->json(
    //     //     'GET',
    //     //     '/api/v1/packages'
    //     // );

    //     // $this->json(
    //     //     'GET',
    //     //     '/api/v1/packages'
    //     // )->assertJson([]);

    //     $expected1 = $package1->toArray();
    //     unset($expected1['binge_package_id']);
    //     $expected2 = $package2->toArray();
    //     unset($expected2['binge_package_id']);


    //     $this->assertApiResponse([$expected1, $expected2]);
    // }
}
