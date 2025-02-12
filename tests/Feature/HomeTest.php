<?php

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('greet the user if they signed out', function () {
    $response = $this->get('/')
    ->assertSee('BookFriends')
    ->assertSee('Sign up to get started');

});

it('shows authenticated menu items if the user is signed in', function () {
$user= User::factory()->create();

$this->actingAs($user)
->get('/')
->assertSeeText(['my book','Feed',$user->name]);
});

it('shows unauthenticated menu items if the user is not  signed in', function () {
 
    

    $this->get('/')
    ->assertSeeText(['Login','Register']);
    });
    
