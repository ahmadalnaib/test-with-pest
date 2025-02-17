<?php
use Illuminate\Foundation\Testing\RefreshDatabase;

use function Pest\Laravel\assertDatabaseHas;
use function  Pest\Laravel\post;

uses(RefreshDatabase::class);
it('has errors if the details are not provider', function () {
$this->post('/register')
->assertSessionHasErrors(['name','email','password']);
});

it('can register a user', function () {
$this->post('/register',[
'name'=>'John Doe',
'email'=>'test@gmail.com',
'password'=>'password',

])
->assertRedirect('/');

$this->assertDatabaseHas('users',['email'=>'test@gmail.com'])
->assertAuthenticated();
});

