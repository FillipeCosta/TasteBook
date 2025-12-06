<?php

test('a página inicial carrega', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
