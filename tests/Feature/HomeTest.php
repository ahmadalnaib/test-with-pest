<?php

it('greet the user if they signed out', function () {
    $response = $this->get('/')
    ->assertSee('BookFriends')
    ->assertSee('Sign up to get started');

});
