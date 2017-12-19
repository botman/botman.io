<code class="language-php">&lt;?php

$botman->hears('Call me {name}', function($bot, $name) {
	$bot->typesAndWaits(2);

    $bot->reply('Hi '.$name);
    $bot->reply('Nice to meet you 😊');
});
</code>