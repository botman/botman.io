<?php

use App\BotMan\Conversations\OnboardingConversation;

$botman = app('botman');

$botman->hears('hi', function($bot) {
    $bot->reply('hello');
});

$botman->hears('.*Bonjour.*', function ($bot) {
    $bot->reply('Nice to meet you!');
});

$botman->hears('Hello', function($bot) {
    $bot->startConversation(new OnboardingConversation);
});
$botman->hears('single response', function ($bot) {
    $bot->reply("Tell me more!");
});

$botman->hears('multi response', function ($bot) {
    $bot->reply("Tell me more!");
    $bot->reply("And even more");
});

$botman->hears('My First Message', function ($bot) {
    $bot->reply('Your First Response');
});

$botman->hears('foo', function ($bot) {
    $bot->reply('Hello World');
});

$botman->hears('call me {name}', function ($bot, $name) {
    $bot->reply('Your name is: '.$name);
});

$botman->hears('call me {name} the {adjective}', function ($bot, $name, $adjective) {
    $bot->reply('Hello '.$name.'. You truly are '.$adjective);
});

$botman->hears('image attachment', function ($bot) {
    // Create attachment
    $attachment = new BotMan\BotMan\Messages\Attachments\Image('https://botman.io/img/logo.png');

    // Build message object
    $message = BotMan\BotMan\Messages\Outgoing\OutgoingMessage::create('This is my text')
                ->withAttachment($attachment);

    // Reply message object
    $bot->reply($message);
});

$botman->hears('I want ([0-9]+)', function ($bot, $number) {
    $bot->reply('You will get: '.$number);
});
$botman->hears('I want ([0-9]+) portions of (Cheese|Cake)', function ($bot, $amount, $dish) {
    $bot->reply('You will get '.$amount.' portions of '.$dish.' served shortly.');
});

$botman->fallback(function($bot) {
    $bot->reply('Sorry, I did not understand these commands. Here is a list of commands I understand: ...');
});