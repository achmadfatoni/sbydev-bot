<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('/events', function ($bot) {
   $bot->reply('Lagi dibikin gan, tapi entah kapan selesainya. sabar dulu ya!!!');
});

$botman->hears('Hi', function ($bot) {
    $bot->reply('Hello!');
});
//$botman->hears('Start conversation', BotManController::class.'@startConversation');
