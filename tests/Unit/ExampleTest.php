<?php

it('can test', function () {
    expect(true)->toBeTrue();
});

it('can use configuration values', function() {
    config()->set('ari.asterisk_host', '127.0.0.1');
    
    expect(config('ari.asterisk_host'))->toBeString('127.0.0.1');
});
