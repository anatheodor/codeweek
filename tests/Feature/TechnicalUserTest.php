<?php

namespace Tests\Feature;

use App\Helpers\ImporterHelper;
use App\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TechnicalUserTest extends TestCase
{

    use DatabaseMigrations;

    /** @test */
    public function it_should_create_a_technical_user()
    {
        $key = "foobar";

        $username = "technical-" . $key;

        // No user should exist for the key
        $this->assertEmpty(User::where("username","=",$username)->get());

        // We call the helper
        ImporterHelper::getTechnicalUser($username);


        // Assess we got a user
        $this->assertNotEmpty(User::where("username","=","technical-".$key)->get());

        // We call again the helper
        ImporterHelper::getTechnicalUser($username);

        $numberOfUsersCreated = sizeof(User::where("username","=",$username)->get());
        // There should be only one user in the database
        $this->assertEquals(1, $numberOfUsersCreated);
    }
}
