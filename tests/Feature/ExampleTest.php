<?php

test('the application returns a successful response', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});

test('the report form is available', function () {
    $this->get('/lapor')
        ->assertOk()
        ->assertSee('Form Lapor Banjir')
        ->assertSee('Kirim Laporan');
});
