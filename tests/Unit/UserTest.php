<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        /* One user */
        /* $user = User::find(1);  */
        $user = User::inRandomOrder()->first();

       $this->assertInternalType('int',$user->id);
        $this->assertInternalType('string',$user->name);
       $this->assertInstanceOf('App\User',$user );
       // dd($user);

       /* $this->assertTrue(true); */
    }
}
