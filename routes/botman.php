<?php

use App\BotMan\Conversations\OnboardingConversation;

$botman = app('botman');

$botman->hears('hi', function($bot) {
    $bot->reply('hello');
});

$botman->hears('Hello', function($bot) {
    $bot->startConversation(new OnboardingConversation);
});

$botman->hears('foo', function ($bot) {
    $bot->reply('Hello World');
});

$botman->hears('call me {name}', function ($bot, $name) {
    $bot->reply('Your name is: '.$name);
});

$botman->hears('I want ([0-9]+)', function ($bot, $number) {
    $bot->reply('You will get: '.$number);
});

$botman->fallback(function($bot) {
    $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
});